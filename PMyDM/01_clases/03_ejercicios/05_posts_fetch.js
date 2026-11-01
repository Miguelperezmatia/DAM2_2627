/*
    Apartado A

    Trae la lista completa de posts
    El endpoint /posts (sin número al final) devuelve un array con 100 posts.
*/


    //  Función que obtiene los posts en una lista

    async function obtenerListaPosts()
    {
        try
        {
            const lista = await fetch("https://jsonplaceholder.typicode.com/posts");
            return await lista.json();
        
        } catch(e)
        {
            console.log(e);
        }
    }

/*
    Apartado B
    
    Trae los 5 primeros posts
*/

    async function obtenerCincoPrimerosPosts()
    {
        try
        {
            const lista = await obtenerListaPosts();
            return lista.slice(0, 5)
        } catch(e)
        {
            console.log(e);
        }
    }

    console.log("POSTS")
    const cincoPosts = await obtenerCincoPrimerosPosts();
    console.log(cincoPosts);

/*
    Apartado C
    
    Trae los 5 primeros titulos
*/

    async function obtenerCincoPrimerosTitulos() 
    {
        const lista = await obtenerCincoPrimerosPosts();
        return lista.map(elemento => elemento.title)
    }

    const titulos = await obtenerCincoPrimerosTitulos();
    console.log("TÍTULOS")
    console.log(titulos);

/*
    Apartado D

    Extrae los posts de un autor determinado (userId)
*/

    async function obtenerPostsDeAutor(user)
    {
        const lista = await obtenerListaPosts();
        
        return lista.filter(elemento => elemento.userId === user);
    }

    console.log("POSTS DE UN AUTOR DETERMINADO")
    const posts = await obtenerPostsDeAutor(5);
    console.log(posts);

/*
    Apartado E

    Trae la lista de usuarios en https://jsonplaceholder.typicode.com/users (también un array de objetos, con id y name) y 
    escribe una función que reciba un userId y devuelva un mensaje del tipo "Ese usuario se llama Clementine Bauch y tiene 10 posts",
    combinando dos peticiones fetch distintas dentro de la misma función async.    

    .../users: Solo tiene los perfiles de los usuarios 

    .../posts: Solo tiene los posts
*/  

    async function obtenerNumeroPostsPorUsuario(userId) 
    {
        //  Obtención de datos del usuario´

        let usuarios = await fetch("https://jsonplaceholder.typicode.com/users");
        usuarios = await usuarios.json();


        //  Obtención del objeto con el userId buscado

        const usuarioPorId = usuarios.find(elemento => elemento.id === userId)
        

        //  Si no existe el userId salimos

        if(!usuarioPorId)
            {
                console.log(`El usuario ${userId} no existe`);
                return;
            }            
        

        //  Si existe el userId obtenemos el nombre

        const name = usuarioPorId.name;


        //  Obtención de todos los posts

        let posts = await fetch("https://jsonplaceholder.typicode.com/posts");
        posts = await posts.json();


        //  Obtención de todos los posts con el userId buscado

        const postsPorId = posts.filter(elemento => elemento.userId === userId);


        //  Conteo de los posts 

        const total_posts = postsPorId.length


        console.log(`Ese usuario se llama ${name} y tiene ${total_posts} posts`)
    }

    console.log("NÚMERO DE POSTS POR ID")
    await obtenerNumeroPostsPorUsuario(2);

/*
    Apartado F

    Usa reduce sobre los 100 posts para contar cuántos posts tiene cada userId, sin hacer 10 peticiones separadas.
*/

    async function conteoPostsPorId() 
    {
        let posts = await fetch("https://jsonplaceholder.typicode.com/posts");
        posts = await posts.json();

        return posts.reduce((acumulado, actual) =>
            {
                
                if(acumulado[actual.userId])
                    acumulado[actual.userId]++;
                else 
                    acumulado[actual.userId] = 1;

                return acumulado;

            }, {})
    }

    const resultado = await conteoPostsPorId();
    console.log(resultado);

