//  Importar variables y funciones

import { PRECIO_BASE, calcularPrecio } from "./utils.js";

let mi_dinero = 100;

mi_dinero -= calcularPrecio("perrito");
console.log("DINERO ACTUAL " + mi_dinero);

mi_dinero -= calcularPrecio("tortitas");
console.log("DINERO ACTUAL " + mi_dinero);