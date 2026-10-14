/*  
    .push(nombre_elemento)

        Añade un elemento por el final




    ¿Por qué usamos .push() en los bucles en lugar de un índice?
    
    .push() calcula automáticamente dónde está el final del array. 

    Delega a JavaScript la responsabilidad de saber en qué posición toca guardar el nuevo dato, ahorrándonos crear y sumar
    variables (indice++) manualmente.



    - Forma antigua (Manual):
        nuevoArray[indiceNuevo] = "Cabra";
        indiceNuevo++;
        

    - Forma moderna (Automática):
        nuevoArray.push("Cabra");
*/


//  EJEMPLO 1 CON PUSH

const animales = ["Zorro", "Águila"]

animales.push("Cabra")
animales.push("Ballena")


console.log(animales)   //  [ 'Zorro', 'Águila', 'Cabra', 'Ballena' ]




//  EJEMPLO 2 CON PUSH Y FOR

const edades = [15, 22, 17, 30, 14, 25];
const mayoresDeEdad = []; 

for (let i = 0; i < edades.length; i++) 
{    
    if (edades[i] >= 18) 
        mayoresDeEdad.push(edades[i]); 
}

console.log(mayoresDeEdad);     //  [ 22, 30, 25 ]


/*
    .unshift(elemento_uno, elementoDos....)

    Añade elementos por el principio
*/

animales.unshift("Oso", "Serpiente")
console.log(animales)                   //  [ 'Oso', 'Serpiente', 'Zorro', 'Águila', 'Cabra', 'Ballena' ]
