import multiprocessing as mp

def calcula(envio, numero):
    
    envio.send((numero, numero * numero))
    envio.close()


def main():

    ctx = mp.get_context("spawn")
    
    recepcion, envio = ctx.Pipe(duplex=False)
    
    p = ctx.Process(target=calcula, args=(envio, 7))
    
    p.start()

    envio.close()

    numero, resultado = recepcion.recv()
    
    recepcion.close()

    p.join()

    print("Numero", numero)
    print("Cuadrado", resultado)
    print("Codigo de salida", p.exitcode) 


if __name__ == "__main__":
    main()



'''
    recepcion, envio = ctx.Pipe(duplex=False)

        Crea una tubería unidireccional (duplex=False), la cual se usa para intercambiar información entre dos procesos
        Devuelve dos extremos: uno para recibir (recepcion) y otro para enviar (envio)

        
    envio.close()

        El padre no necesita su copia del extremo de envío.

        
    numero, resultado = recepcion.recv()

        Espera el mensaje del hijo y desempaqueta sus dos valores.


    Hay que pasar envio porque los procesos en Python no comparten memoria entre sí.

    Cuando creas un proceso nuevo con multiprocessing, este arranca en un espacio de memoria completamente aislado e
    independiente.

    Esto significa que la función calcula, al ejecutarse en el proceso secundario, no sabe qué es la variable 
    envio ni puede acceder a lo que hayas creado dentro de main().
'''