import threading
import os


def saludo():
    actual = threading.current_thread()
    print(f"PID {os.getpid()}" )
    print(f"Hola desde {actual.name}")

def main():

    saludo()

    hilo = threading.Thread(target=saludo, name="Secundario")
    hilo.start()
    hilo.join()
    print("Fin del programa")


if __name__ == "__main__":
    main()

'''
    Cuando ejecutas un script de Python, el sistema arranca un proceso y automáticamente crea un único hilo para ejecutar 
    tu código línea por línea

        El proceso es simplemente el espacio de trabajo donde viven los hilos.
        Lo que ejecuta el código es siempre un hilo. 


    import threading 
    
        Permite crear y administrar múltiples hilos de ejecución.

    import os
    
        Permite interactuar con el sistema operativo (en este caso, para obtener el identificador del proceso).


    threading.current_thread()
    
        Identifica qué hilo exacto está ejecutando la función en ese momento.
        Devuelve MainThread si se llama desde el hilo que se crea por primera vez automáticamente

        
    os.getpid()
    
        Obtiene el PID (Process ID), que es el número de identificación único que el sistema operativo le asigna
        a tu programa en ejecución.

        
    Concepto clave: Verás que sin importar qué hilo ejecute esta función, el PID será exactamente el mismo. 
        Esto demuestra que los hilos viven dentro del mismo proceso y comparten sus recursos (memoria, variables).


    saludo(): 
    
    Se ejecuta la función de forma normal. Como el programa acaba de empezar, esto lo ejecuta el hilo principal
    (por defecto llamado MainThread).


    hilo.start(): 

        Inicia la ejecución del hilo "Secundario". 
        A partir de este momento, el programa principal y el hilo secundario funcionan en paralelo.

        
    hilo.join(): 
    
        Le dice al hilo principal: "Detente aquí y no sigas avanzando hasta que el hilo 'Secundario' haya terminado su trabajo". 


    if __name__ == "__main__":

        Como con hilos no se arrancan nuevos intérpretes de python no es necesario ponerlo         
'''