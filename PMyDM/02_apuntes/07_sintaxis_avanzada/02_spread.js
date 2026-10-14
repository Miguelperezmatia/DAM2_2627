/*
    SPREAD OPERATOR (...)

    Permite desempaquetar las propiedades de un objeto o los elementos de un array dentro de otro nuevo. 

    Es ideal para hacer copias inmutables (sin modificar el original).
*/

const ordenador1 = 
{
    n_procesador: 3,
    procesador: "i7",
    grafica: "4070",
    pantalla: "4K",
    raton: "razer",
    conectado: true
};




const ordenador2 = { ...ordenador1, grafica: "8001", lucesRGB: true };
console.log(ordenador2); 

/*  
    --- SPREAD CON OBJETOS ---
    
    1. Vuelca todas las propiedades de 'ordenador1' en este nuevo objeto.
    2. Si declaramos una propiedad que ya existía (como 'grafica'), su valor se SOBREESCRIBE.
    3. Si declaramos una propiedad nueva, simplemente se añade.
*/




const animales = ["sapo", "rana", "tiburón"];

const masAnimales = [...animales, "león"];
console.log(masAnimales);                   // ["sapo", "rana", "tiburón", "león"]


/*  
    --- SPREAD CON ARRAYS ---
    
    Vuelca todos los elementos de 'animales' en un nuevo array.
    Nos permite añadir nuevos elementos al final, al principio, o incluso combinar varios arrays.

    En este ejemplo, añadimos "león" al final. 
    
        Si quisiéramos ponerlo al principio sería: ["león", ...animales]
*/