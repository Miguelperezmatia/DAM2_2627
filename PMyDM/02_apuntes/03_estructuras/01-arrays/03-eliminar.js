let animales = ["Zorro", "Águila", "Ballena"]

/*
    .pop()

    Elimina el último elemento y lo devuelve
*/

const ultimo = animales.pop()

console.log(`Último elemento eliminado: ${ultimo}`)     //  Último elemento eliminado: Ballena
console.log(animales)                                   //  [ 'Zorro', 'Águila' ]


/*
    .shift()
    
    Elimina el primer elemento y lo devuelve
*/

animales = ["Zorro", "Águila", "Ballena"]

const primero = animales.shift()

console.log(`Primer elemento eliminado: ${primero}`)     //  Primer elemento eliminado: Zorro
console.log(animales)                                   //  [ 'Águila', 'Ballena' ]
