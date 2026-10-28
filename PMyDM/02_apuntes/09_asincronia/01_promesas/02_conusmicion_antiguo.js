import { PEDIDO } from "./01_creacion.js";

/*
    CONSUMIR LA PROMESA DE FORMA ANTIGUA


    .then (valor)
        recibe un parámetro que representa el valor guardado en resolve


    .catch (error)
        recibe un parámetro que representa el valor guardado en reject
*/

PEDIDO
    .then(mensaje   =>  console.log(`Recibido, ${mensaje}`))
    .catch(error    =>  console.log(`Error, ${error}`));