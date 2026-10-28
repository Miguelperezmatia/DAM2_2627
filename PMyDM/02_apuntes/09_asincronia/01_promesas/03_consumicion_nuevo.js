import { PEDIDO } from "./01_creacion.js";

/*
    CONSUMIR LA PROMESA DE FORMA MODERNA

    Nuevas herramientas:


        1) async: 
            
            Indica que va a haber código asíncrono.

            Una función 'async' siempre devuelve una Promesa por detrás.



        2) await: 

            Solo se puede usar dentro de una función 'async'

            Extrae el 'valor' del resolve.

            Pausa la ejecución de ESA función hasta que la Promesa devuelva un resultado, es decir, el hilo principal
            se sigue ejecutando

            

        3) try / catch:

            
            - try                   
            
                Con await se extrae el valor de resolve
                Intenta ejecutar el código cuando todo sale bien


            - catch (error)         
            
                El parámetro error representa el valor de reject
                Si la promesa falla  el código salta aquí
*/


async function consumirPromesaPedido() 
{
    try
    {
        const resultado = await PEDIDO;     //  Si va todo bien, resultado toma el valor de resolve
        console.log(resultado);

    } catch (error)                         //  Si hay algún fallo, error toma el valor de reject 
    {
        console.log(error)
    }
}


consumirPromesaPedido();


