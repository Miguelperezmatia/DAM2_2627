/*
    PETICIONES HTTP (Descargar datos de internet)
    

    fetch() 
        
        Función que hace una petición a una URL para obtener datos.
        Crea y devuelve una Promesa en formato de texto bruto no manejable por JavaScript.


    json()

        Función que coge la respuesta del servidor y la convierte en un objeto o array de JavaScript
        Crea y devuelve una promesa en formato de objeto o array

    
    EL COMPORTAMIENTO DEL HILO PRINCIPAL (MAIN THREAD)

        1) Entrada a la función: 
            Llamas a funcionFetch(). El hilo principal entra y comienza a leerla.


        2) La pausa (await): 
            Al chocar con 'await fetch(...)', la FUNCIÓN se pausa. 
            Le dice al hilo principal: "Voy a tardar en descargar esto, sigue tú con el programa".


        3) El hilo principal avanza:
            El hilo principal sale de la función y ejecuta inmediatamente la línea de código que haya
            debajo de donde llamaste a la función, sin esperar a que la descarga termine.
*/


async function funcionFetch() 
{
    try
    {
        const resultado = await fetch("https://jsonplaceholder.typicode.com/posts/1");  //  Pedimos los datos a la API

        const mensaje = await resultado.json();                                         //  Traducimos la respuesta a JSON

        console.log(mensaje);

    } catch(error)      //  error toma el valor del reject() generado automáticamente por el navegador (no podemos especificar un mensaje)
    {
        console.log(error);
    }
}