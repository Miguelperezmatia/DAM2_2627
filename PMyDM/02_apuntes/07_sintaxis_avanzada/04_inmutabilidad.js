/*
    RETO DE INMUTABILIDAD

    Objetivo: Devolver un NUEVO objeto actualizado sin modificar el original en ningún momento.
    Debes usar el operador spread (...) tanto para copiar el objeto como para el array interno.

    Normas:
    - Obligatorio usar arrow function (=>).
    - Prohibido usar .push().
    - Prohibido reasignar directamente (ej: guerrera.nivel = 16).
*/

const personaje = {
    nombre: "Aloy",
    nivel: 15,
    inventario: ["Arco", "Poción"]
};

// Escribe aquí la función subirNivel(guerrera, nuevaArma) que sume 1 al nivel y añada el arma al inventario:

const SUBIR_NIVEL = (guerrera, nueva_arma) => 
   ({...guerrera,
   nivel : guerrera.nivel + 1,
   inventario : [...guerrera.inventario, nueva_arma]});
