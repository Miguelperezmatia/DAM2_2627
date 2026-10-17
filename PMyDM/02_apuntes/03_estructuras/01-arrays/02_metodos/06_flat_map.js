const equipo = [
  { nombre: "Ana", lenguajes: ["JavaScript", "Python"] },
  { nombre: "Luis", lenguajes: ["C#"] },
  { nombre: "Marta", lenguajes: ["Java", "Kotlin"] }
];


/*
    lista.flatMap()

    Sirve para transformar los elementos de una lista aplastando automáticamente los resultados en un único array
    de un solo nivel.

    Evita el problema de que te queden listas dentro de listas.

    Úsalo siempre que la propiedad a la que intentes acceder mediante un map sea un array en sí misma (como un array 
    de compras, un array de etiquetas, o un array de lenguajes)
*/



// EL PROBLEMA CON MAP:

const conMap = equipo.map(dev => dev.lenguajes);
console.log(conMap); 

/*
    Resultado: [ ['JavaScript', 'Python'], ['C#'], ['Java', 'Kotlin'] ]
    ❌ Tienes arrays metidos dentro de otro array.
*/



// LA SOLUCIÓN CON FLATMAP:

const conFlatMap = equipo.flatMap(dev => dev.lenguajes);
console.log(conFlatMap); 

/*  
    Resultado: [ 'JavaScript', 'Python', 'C#', 'Java', 'Kotlin' ]
    ✅ Extrae los datos y rompe las "cajas" internas, dejando una lista limpia.
*/