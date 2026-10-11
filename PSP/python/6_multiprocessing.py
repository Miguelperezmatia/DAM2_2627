import multiprocessing
import time


def mi_tarea():
    print("El proceso hijo está trabajando...")
    time.sleep(2)


if __name__ == "__main__":
    print("Soy el proceso Padre. Arrancando...")
    
    hijo = multiprocessing.Process(target=mi_tarea)
    hijo.start()
    hijo.join()

    print("Fin del programa.")

'''
    El archivo ejecutado directamente por el usuario recibe el nombre interno "__main__".

    Cuando se crea un proceso hijo (en Windows), este vuelve a leer el archivo desde el principio,
    pero no recibe el nombre "__main__".

    Esto evita el bucle de creación infinito de procesos
''' 