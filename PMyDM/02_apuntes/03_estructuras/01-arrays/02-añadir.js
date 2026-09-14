let animales = ["Zorro", "Águila"]

/*  
    .push(nombre_elemento)

    Añade un elemento por el final
*/

animales.push("Cabra")
animales.push("Ballena")


console.log(animales)   //  [ 'Zorro', 'Águila', 'Cabra', 'Ballena' ]


/*
    .unshift(elemento_uno, elementoDos....)

    Añade elementos por el principio
*/

animales.unshift("Oso", "Serpiente")
console.log(animales)                   //  [ 'Oso', 'Serpiente', 'Zorro', 'Águila', 'Cabra', 'Ballena' ]
