import subprocess
import sys


try:
    resultado = subprocess.run(
        [sys.executable, "-c", "print(6 / 0)"],
        capture_output=True,
        text=True,
        check=True
    )

    print(resultado.stdout.strip())

except subprocess.CalledProcessError as e:
    print("Excepción capturada automáticamente:")
    print(f"Código de salida: {e.returncode}")
    print(f"Contenido de stderr:\n{e.stderr.strip()}")


'''
    subprocess.run()    ejecuta un comando, espera a que termine y devuelve un objeto con los resultados.


        capture_output=True:    atrapa internamente lo que el proceso iba a imprimir en pantalla (tanto el stdout como el stderr).

        text=True:              convierte los datos capturados (que por defecto son bytes) en texto normal (strings).

        check=True              si el proceso hijo falla (devuelve un código distinto a 0) se detiene la ejecución y lanza un error 
                                automáticamente de tipo CalledProcessError.

                                
    Si el proceso hubiera funcionado bien:
    
        Imprimimos el resultado por stdout (Al trabajar con un objeto debemos usar esta propiedad para distinguirlas de otras como
        por ejemplo .returncode)

        strip() simplemente limpia los saltos de línea o espacios en blanco sobrantes al principio y al final.


    Si el proceso falla:

        e.returncode        contiene el número del error que devolvió el sistema operativo (ej. 1 para error general)
        e.stderr            contiene el texto exacto del error que escupió el proceso (en este caso, el ZeroDivisionError).


        El proceso padre por defecto se llama __maaain__
'''