/*
    RETORNAR DATOS EN VEZ DE IMPRIMIRLOS (Modularidad)

    Una función async siempre devuelve una promesa, por lo que al llamar a una función async debemos usar await
*/

async function obtenerPost()
{ 
    const respuesta = await fetch("https://jsonplaceholder.typicode.com/posts/1");
    
    return await respuesta.json();      //   // Devolvemos el resultado
}


async function manejarDatos()
{
    try
    {
        const post = await obtenerPost();   //  Uso de await porque obtenerPost() devuelve una Promesa

        return post;

    } catch(error)
    {
        console.log("Hubo un error al obtener el post: ", error);
    }
}

const post = await manejarDatos();

//  Aquí iría la lógica para hacer lo que queramos con el objeto post