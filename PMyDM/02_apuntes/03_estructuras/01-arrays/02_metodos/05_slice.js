let animales = ["Vaca", "Zorro", "Elefante", "Jirafa"]


/*
    nombrearray.slice(indice_principio, indice_final)

        Devuelve un objeto de tipo Array con dimensión (]
            indice_principio se incluye
            indice_final NO se incluye
*/

let nuevo_animales = animales.slice(0,3)
console.log(nuevo_animales)                 //  [ 'Vaca', 'Zorro', 'Elefante' ]