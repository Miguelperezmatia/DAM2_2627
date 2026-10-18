/*
    Normas estrictas del examen:

    Prohibido modificar el array original (inventario).
    Usa arrow functions (=>) al menos en los métodos de los arrays.
*/


const inventario = [
  { id: 1, titulo: "Cyberpunk 2077", categoria: "RPG", precio: 45, stock: 0 },
  { id: 2, titulo: "Super Mario Odyssey", categoria: "Plataformas", precio: 50, stock: 12 },
  { id: 3, titulo: "Zelda: Tears of the Kingdom", categoria: "RPG", precio: 65, stock: 5 },
  { id: 4, titulo: "Elden Ring", categoria: "RPG", precio: 60, stock: 3 },
  { id: 5, titulo: "Hollow Knight", categoria: "Metroidvania", precio: 15, stock: 20 },
];


/*
    Ejercicio 1

    Escribe una función obtenerCatalogo(lista) que devuelva un array solo con los títulos (array de strings)
    de los juegos que cumplan dos condiciones:

    Tienen que tener stock disponible (mayor que 0).
    Tienen que valer 60€ o menos.
*/


const obtenerCatalogo = (lista) => 
    lista.filter(elemento => elemento.stock > 0).
    filter(elemento => elemento.precio <= 60).
    map(elemento => elemento.titulo);


const titulos = obtenerCatalogo(inventario);
console.log(titulos);                               //  [ 'Super Mario Odyssey', 'Elden Ring', 'Hollow Knight' ]    


/*
    EJERCICIO 2

    Escribe una función venderJuego(juego, cantidadComprada) que reciba un objeto juego y un número.

    La función debe devolver un nuevo objeto (una copia) del juego, pero con su stock restado según la cantidad comprada.

    Si la cantidadComprada es mayor que el stock disponible, la función debe devolver el objeto juego original intacto.
*/

const venderJuego = (juego, cantidadComprada) =>
    {
        const {stock} = juego;

        if(cantidadComprada > stock)
            return juego;

        const juego_modificado = {...juego, stock:stock-cantidadComprada};
        return juego_modificado;
    } 


console.log("ORIGINAL: ", inventario[1]);

const juego = venderJuego(inventario[1], 5);
console.log("MODIFICADO: ", juego);

console.log("ORIGINAL: ", inventario[1]);

const juego2 = venderJuego(inventario[inventario.length - 1], 1000);
console.log(juego2);

/*
    EJERCICIO 3

    Escribe una función calcularValorTotal(lista) que calcule y devuelva el dinero total que ganaría la tienda si
    consiguiera vender todo el stock de todos los juegos..
*/

const calcularValorTotal = (lista) => lista.reduce((acumulado, actual) => acumulado + actual.stock * actual.precio, 0);

const suma_total = calcularValorTotal(inventario);
console.log(`Si se vende todo, la tienda ganaría ${suma_total} euros`);

/*
    EJERCICIO 4

    Escribe una función contarPorCategoria(lista), que imprima { RPG: 3, Plataformas: 1, Metroidvania: 1 }
*/

const contarPorCategoria = (lista) => lista.reduce((acumulado, actual)=> 
    {
        acumulado[actual.categoria] ? acumulado[actual.categoria]++ : acumulado[actual.categoria] = 1;

        return acumulado;
    }, {});

console.log(contarPorCategoria(inventario));