import os
import multiprocessing as mp
from concurrent.futures import ProcessPoolExecutor
import time


def crear_lista_numeros():
    return list(range(1, 51))

def crear_lotes(lista, tam_lote = 7):

    lotes = []
    id_lote = 1

    for i in range(0, len(lista), tam_lote):

        sublista = lista[i : i + tam_lote]

        lotes.append((id_lote, sublista))

        id_lote += 1

    return lotes

def calcular_suma_cuadrados(lote):

    id_lote, numeros = lote
    pid = os.getpid()

    suma = 0

    for numero in numeros:
        suma += numero * numero

    return {
        "id" : id_lote,
        "pid" : pid,
        "cantidad_numeros" : len(numeros),
        "suma" : suma 
    }

def ejecutar_secuencial(lotes):

    tiempo_inicio = time.perf_counter()

    suma_total = 0

    for lote in lotes:
        resultado = calcular_suma_cuadrados(lote)
        suma_total += resultado["suma"]

    tiempo_total = time.perf_counter() - tiempo_inicio; 

    return suma_total, tiempo_total

def ejecutar_multiprocesos(lotes):

    tiempo_inicio = time.perf_counter()

    ctx = mp.get_context("spawn")

    with ProcessPoolExecutor(
       
        max_workers = 2, 
        mp_context = ctx

    ) as pool:

        resultados = list(pool.map(calcular_suma_cuadrados, lotes))        

    suma_total = 0

    for r in resultados:
        suma_total += r["suma"]

    tiempo_total = time.perf_counter() - tiempo_inicio; 

    return resultados, suma_total, tiempo_total

def ejecutar_prueba(nombre_prueba : str, datos, tam_lote):
    print(f"Prueba llamada {nombre_prueba} con datos {datos} y con tamaño {tam_lote} de cada lote")
    lotes = crear_lotes(datos, tam_lote)

    nombre_normalizado = nombre_prueba.lower().strip()

    if nombre_normalizado == "error en una tarea":
        ejecutar_prueba_error(lotes)
    elif nombre_normalizado in ["lista vacía", "lista vacia", "lote incompleto"]: 
        ejecutar_prueba_normal(lotes)
    else:
        print(f"El nombre de la prueba {nombre_prueba} es inválido")

def ejecutar_prueba_normal(lotes):
    suma_secuencial, _ = ejecutar_secuencial(lotes)
    _, suma_procesos, _ = ejecutar_multiprocesos(lotes)

    if suma_secuencial == suma_procesos:
        print(f"Se ha calculado correctamente el total de las sumas de los cuadrados de los números ({suma_secuencial}) en ambas versiones")
    else:
        print(f"Las sumas no coinciden (Secuencial: {suma_secuencial}, Procesos: {suma_procesos})")

def ejecutar_prueba_error(lotes):
    try:
        _, suma_procesos, _ = ejecutar_multiprocesos(lotes)
        print(f"Se ha calculado correctamente el total de las sumas de los cuadrados de los números ({suma_procesos}) en la versión de procesos")
            
    except TypeError as e:
        print(f"Tipo de error: {type(e).__name__}")
        print(f"No se puede realizar la suma de cuadrados porque la lista contiene uno o más elementos no numéricos")
    except Exception as e:
        print(f"Tipo de error: {type(e).__name__}")
        print(f"{e}")

def medir_tiempos_acumulados(lotes, repeticiones = 3):

    tiempos_secuencial = []
    tiempos_procesos = []

    for _ in range(repeticiones):

        _, tiempo_secuencial = ejecutar_secuencial(lotes)
        _, _, tiempo_proceso = ejecutar_multiprocesos(lotes)

        tiempos_secuencial.append(tiempo_secuencial)
        tiempos_procesos.append(tiempo_proceso)

    return tiempos_secuencial, tiempos_procesos

def calcular_media(lista_tiempos):

    if not lista_tiempos:
        return 0.0

    suma_tiempo = 0

    for t in lista_tiempos:
        suma_tiempo += t

    media_tiempo = suma_tiempo / len(lista_tiempos)

    return media_tiempo

def imprimir_comparativa_tiempos(tiempos_secuencial, tiempos_procesos, tiempo_medio_secuencial, tiempo_medio_procesos):

    print("MEDICIÓN Y COMPARATIVA DE TIEMPOS\n")

    print(f"{'EJECUCIÓN':<18} | {'SECUENCIAL (s)':<18} | {'MULTIPROCESO (s)':<18}")
    print("-" * 60)

    for t in range(len(tiempos_secuencial)):
        tiempo_secuencial_string = f"{tiempos_secuencial[t]:.6f}"
        tiempo_proceso_string = f"{tiempos_procesos[t]:.6f}"
        print(f"{f'Ejecución {t+1}':<18} | {tiempo_secuencial_string:<18} | {tiempo_proceso_string:<18}")

    print("-" * 60)

    tiempo_medio_secuencial_string = f"{tiempo_medio_secuencial:.6f}"
    tiempo_medio_proceso_string = f"{tiempo_medio_procesos:.6f}"
    print(f"{'TIEMPO MEDIO':<18} | {tiempo_medio_secuencial_string:<18} | {tiempo_medio_proceso_string:<18}")
    print("-" * 60)


    if tiempo_medio_procesos < tiempo_medio_secuencial:
        print("La versión multiproceso ha sido más rápida que la versión secuencial")
    else:
        print("La versión secuencial ha sido más rápida que la versión multiproceso")

def main():

    pid = os.getpid()
    print(f"PID del proceso principal = {pid}\n")

    lista_numeros = crear_lista_numeros()
    lotes = crear_lotes(lista_numeros)
    
    suma_secuencial, tiempo_secuencial = ejecutar_secuencial(lotes)
    total_numeros_secuencial = len(lista_numeros)
    print(f"MÉTODO SECUENCIAL\nLa suma de los cuadrados de los números es {suma_secuencial}\n")

    resultados_procesos, suma_procesos, tiempo_procesos = ejecutar_multiprocesos(lotes)
    total_numeros_procesos = 0
    ids_lotes = []
    print(f"MÉTODO CON PROCESOS\nLa suma de los cuadrados de los números es {suma_procesos}\n")

    for p in resultados_procesos:
        total_numeros_procesos += p["cantidad_numeros"]
        ids_lotes.append(p["id"]) 
        print(f"ID lote = {p['id']}, PID Worker = {p['pid']}, Cantidad de números = {p['cantidad_numeros']}, Suma parcial = {p['suma']}\n")

    print("COMPROBACIONES\n")

    if suma_secuencial == suma_procesos == 42925:
        print(f"Se ha calculado correctamente el total de las sumas de los cuadrados de los números ({suma_secuencial}) en ambas versiones")
    else:
        print(f"Las sumas no coinciden (Secuencial: {suma_secuencial}, Procesos: {suma_procesos})")

    if total_numeros_secuencial == total_numeros_procesos == 50:
        print(f"Se han procesado correctamente los {total_numeros_secuencial} números en ambas versiones")
    else:
        print(f"El total de números en ambas versiones no coinciden (Secuencial: {total_numeros_secuencial}, Procesos: {total_numeros_procesos})")

    if len(ids_lotes) == len(set(ids_lotes)) == 8:
        print(f"Se han recibido {len(ids_lotes)} lotes únicos en la versión con procesos")
    else:
        print("Faltan lotes o hay IDs duplicados en la versión con procesos")

    print()

    print("PRUEBAS ADICIONALES\n")

    ejecutar_prueba("Lote incompleto", [1, 2, 3], tam_lote = 2)
    print()

    ejecutar_prueba("Lista vacía", [], tam_lote = 7)
    print()

    ejecutar_prueba("Error en una tarea", [1, "error", 3], tam_lote = 2)
    print()

    tiempos_secuencial, tiempos_procesos = medir_tiempos_acumulados(lotes)
    media_tiempo_secuencial = calcular_media(tiempos_secuencial)
    media_tiempo_procesos = calcular_media(tiempos_procesos)
    imprimir_comparativa_tiempos(tiempos_secuencial, tiempos_procesos, media_tiempo_secuencial, media_tiempo_procesos)

if __name__ == "__main__":
    main()