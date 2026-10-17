const alumnos = [
  { nombre: "Marta", nota: 8.5, edad: 27 },
  { nombre: "Luis",  nota: 4.2, edad: 31 },
  { nombre: "Sara",  nota: 6.9, edad: 22 },
  { nombre: "Iván",  nota: 9.8, edad: 19 },
  { nombre: "Noa",   nota: 3.4, edad: 45 },
];

//  Escribe obtenerAprobados, que reciba el array de alumnos y devuelva solo los que tienen nota 5 o más

function obtenerAprobados(lista)
{
    return lista.filter(alumno => alumno.nota >= 5.0);
}



//  Escribe obtenerNombres, que transforme el array de objetos en un simple array de strings con los nombres

function obtenerNombres(lista)
{
    return lista.map(alumno => alumno.nombre);
}



//  Escribe calcularMedia, que devuelva la media de todas las notas

function calcularMedia(lista)
{   
    const suma = lista.reduce(acumulado, actual => acumulado + actual.nota, 0);
    return suma / lista.length;
}



/*
    Escribe alumnoConMejorNota usando reduce (no find) para devolver el objeto del alumno con la nota más alta. 
    
    Luego, usando destructuring y spread, escribe subirNota(alumno, puntos) que devuelva una copia del alumno con la nota incrementada,
    sin modificar el objeto original — comprueba con console.log que el alumno de partida sigue con su nota de siempre.
*/


function alumnoConMejorNota(lista)
{
    return lista.reduce(obtenerMayor);
}

function obtenerMayor(acumulado, actual)
{

    if(actual.nota > acumulado.nota)
        acumulado = actual;

    return acumulado;
}

const mejor_alumno = alumnoConMejorNota(alumnos);
console.log(mejor_alumno);


function subirNota(alumno, puntos)
{
    const {nota} = alumno;
    
    const copia = {...alumno, nota : nota + puntos}

    return copia;
}




const alumnosAprobados = obtenerAprobados(alumnos);

console.log("Alumnos aprobados")
console.log(alumnosAprobados);


const nombresAlumnos = obtenerNombres(alumnosAprobados);

console.log("Nombres de alumnos")
console.log(nombresAlumnos);


console.log("Alumno original");
console.log(alumnos[0]);

console.log("Alumno con nota mejorada")
const copia = subirNota(alumnos[0], 5);
console.log(copia);