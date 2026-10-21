/*
    SIMULACRO DE EXAMEN 3 - Plataforma de Cursos

    Normas estrictas del examen:
    - Prohibido modificar o mutar los objetos y arrays originales en ningún momento.
    - Obligatorio usar arrow functions (=>).
*/

const cursos = [
  { id: 10, nombre: "JavaScript Moderno", nivel: "Avanzado", estado: "publicado", temario: [{ tema: "Arrays", horas: 2 }, { tema: "Asincronía", horas: 3 }] },
  { id: 11, nombre: "HTML y CSS", nivel: "Básico", estado: "publicado", temario: [{ tema: "Flexbox", horas: 4 }] },
  { id: 12, nombre: "React y Redux", nivel: "Intermedio", estado: "borrador", temario: [{ tema: "Hooks", horas: 5 }, { tema: "Context", horas: 2 }] },
  { id: 13, nombre: "Python Data Science", nivel: "Avanzado", estado: "borrador", temario: [] },
  { id: 14, nombre: "Git y GitHub", nivel: "Básico", estado: "publicado", temario: [{ tema: "Ramas", horas: 2 }, { tema: "Merge", horas: 1 }] }
];

/*
    EJERCICIO 1

    Crea una función que, partiendo del catálogo completo, devuelva una lista de textos solo con los cursos que estén 
    en estado "publicado".
    El texto de cada elemento resultante debe tener exactamente este formato: 
    "Curso: [nombre] - Nivel: [nivel]"
*/

const LISTA_CURSOS = (lista) => lista.filter(({estado}) => estado === "publicado").map(({nombre, nivel}) => `Curso: ${nombre} - Nivel: ${nivel}`);
console.log(LISTA_CURSOS(cursos));


/*
    EJERCICIO 2

    Desarrolla una funcionalidad que reciba el catálogo y el identificador de un curso específico, y devuelva la suma total de 
    horas de dicho curso (calculada a partir de los temas de su temario).

    Si el curso no existe en la lista o si su temario está vacío, debe devolver 0.
*/

const SUMAR_HORAS = (lista, id_buscado) => 
    {
        const elemento = lista.find(elemento => elemento.id === id_buscado);

        if(elemento === undefined || elemento.temario.length === 0)
            return 0;

        return elemento.temario.reduce(calcular_horas, 0);
    }
    

function calcular_horas(acumulado, actual)
    {
        acumulado += actual.horas;
        return acumulado;
    }
    
console.log(SUMAR_HORAS(cursos, 9));
console.log(SUMAR_HORAS(cursos, 10));
console.log(SUMAR_HORAS(cursos, 13));



/*
    EJERCICIO 3

    Implementa una función que reciba un único objeto de curso y una cantidad indeterminada de nuevos temas a añadir.
    - Si el curso es de nivel "Básico", la función debe devolver el objeto original intacto.
    - Si es de cualquier otro nivel, debe devolver una versión actualizada del curso (generando un objeto nuevo, sin modificar el original),
        cambiando su estado a "publicado" e incorporando los nuevos temas al final del listado de los que ya tenía.
*/


const AMPLIAR_TEMARIO = (objeto, ...temas) => 
    {
        if(objeto.nivel === "Básico")
            return objeto;

        return {
            ...objeto,
            estado : "publicado",
            temario : [...objeto.temario, ...temas]
        };
    }

console.log(AMPLIAR_TEMARIO(cursos[0]))
console.log(AMPLIAR_TEMARIO(cursos[0], {tema : "Lengua"}, {tema : "Mates"}));
console.log(AMPLIAR_TEMARIO(cursos[1]))



/*
    EJERCICIO 4

    Construye una función que procese el listado completo y devuelva un único objeto que agrupe y cuente la cantidad de cursos que hay disponibles
    por cada nivel.

    El resultado devuelto por consola debería verse exactamente así: { Avanzado: 2, Básico: 2, Intermedio: 1 }
*/

    const OBJETO_AGRUPADO = (lista) => lista.reduce(agrupar, {});

    function agrupar(acumulado, actual)
    {
        if(acumulado[actual.nivel])
            acumulado[actual.nivel]++;

        else acumulado[actual.nivel] = 1;

        return acumulado;
    }

    console.log(OBJETO_AGRUPADO(cursos));

/*
    EJERCICIO 5

    Modela la siguiente información en una estructura de datos adecuada (un array de objetos):

    - Un estudiante con identificador 1, llamado "Carlos", con una suscripción activa (booleano), que está matriculado
     en los cursos correspondientes a los identificadores 10 y 14.

    - Una estudiante con identificador 2, llamada "Laura", sin suscripción activa, que no tiene ninguna matrícula.
*/

const ESTUDIANTES = [
        {id : 1, nombre : "Carlos", suscriptor : true, cursos : [10, 14]},
        {id : 2, nombre : "Laura", suscriptor : false, cursos : []}
    ]