//  LEER DATOS EN EL NAVEGADOR

const nombre = prompt("¿Cómo te llamas?");
console.log("Hola, " + nombre);


/*
    Para verlo debemos enlazar este archivo con un html (por ejemplo, 00-leer_dato.html).
    El paso de enlace se hace en el archivo html

        Abrimos el html en el navegador
        Pulsamos Fn + F12
        En la ventana de console deberíamos ver el resultado
*/


/*  
    3 Reglas clave para tus apuntes:

    1)  Siempre devuelve TEXTO (String):

        Si quieres usar ese dato para hacer matemáticas, tienes que convertirlo a número usando Number(), parseInt()...



    2)  El botón Cancelar devuelve null:

        Si el usuario hace clic en "Cancelar" o pulsa la tecla Escape, la variable guardará el valor null (nulo).



    3)  Valor por defecto (Opcional):

        Puedes poner un segundo texto separándolo por una coma para que aparezca ya escrito en la caja.

        prompt("¿En qué año naciste?", "2000");
*/