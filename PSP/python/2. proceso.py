import psutil as ps     #   Esta librería nos permite interactuar con el sistema operativo para gestionar procesos (más avanzada que os)

proceso_actual = ps.Process()

print(f"PID del proceso: {proceso_actual.pid}")

print(f"Directorio de trabajo: {proceso_actual.cwd()}")     #   C:\DAM2_2627\PSP\python

print(f"Estado del proceso: {proceso_actual.status()}")     #   running

print(f"Ejecutable de Python: {proceso_actual.exe()}")      #   C:\Program Files\Python314\python.exe


'''
    DOCUMENTACIÓN
    
    ps.Process()            Crea un objeto que sirve como mando a distancia para obtener datos o métodos de un proceso 
                            Al no pasar por parámetro ningún PID asume que el proceso es el que se ejecuta en el propio script de python

    proceso_actual.cwd()    Devuelve una cadena de texto (String) con la ruta absoluta de la carpeta desde la cual se ha ejecutado el proceso.
                            No depende de si el venv está activado o no
                               
    proceso_actual.exe()    Cuando activas venv tu sistema o tu editor de código (como VSCode o IntelliJ) piensa: "El programador no me ha especificado qué 
                            Python concreto quiere usar, así que voy a coger el que está instalado por defecto en todo el ordenador".
'''