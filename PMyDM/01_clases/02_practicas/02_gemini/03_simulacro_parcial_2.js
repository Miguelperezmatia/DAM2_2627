const pedidos = [
  { id: 1, cliente: "Ana", estado: "entregado", compras: [{ prod: "Ratón", precio: 20 }, { prod: "Teclado", precio: 50 }] },
  { id: 2, cliente: "Luis", estado: "pendiente", compras: [{ prod: "Monitor", precio: 200 }] },
  { id: 3, cliente: "Marta", estado: "entregado", compras: [{ prod: "Cable USB", precio: 10 }, { prod: "Ratón", precio: 20 }] },
  { id: 4, cliente: "Sara", estado: "cancelado", compras: [{ prod: "Portátil", precio: 800 }] }
];


/*
    Prohibido modificar/mutar los objetos y arrays originales en ningún momento.
    Obligatorio usar arrow functions (=>).
    
    EJERCICIO 1: Cálculo por cliente

    Escribe una función calcularGasto(lista, nombreCliente) que devuelva la cantidad total de dinero que ha gastado
    el cliente indicado (sumando el precio de todos los productos de sus compras).

    Si el cliente no existe en la lista, la función debe devolver 0.
*/

//  1   SOLUCIÓN


const calcularGasto = (lista, nombreCliente) => 
    {
        const pedido = lista.find(objeto => objeto.cliente === nombreCliente);

        if(pedido === undefined)
            return 0;

        return pedido.compras.reduce((acumulado, actual) => acumulado + actual.precio ,0)
    }

    console.log(calcularGasto(pedidos, "Ana"));


//  2 SOLUCIÓN : bucles clásicos

const calcularGasto2 = (lista, nombreCliente) => 
    {
        let suma = 0;

        for(let objeto of lista)
            {
                const {cliente} = objeto;

                if(cliente === nombreCliente)
                {
                    for(let compra of objeto.compras)
                        {
                            const {precio} = compra;
                            suma += precio;
                        }
                    return suma;
                }        
            }
        
        return suma;
    }

    console.log(calcularGasto2(pedidos, "Ana"));


//  3 SOLUCIÓN: no es lo ideal, pero para practicar está interesante
const calcularGasto3 = (lista, nombreCliente) => 
    {
        return lista.reduce((acumulado, actual) => 
            {
                if(actual.cliente === nombreCliente)
                    { 
                        for(let compra of actual.compras)
                            acumulado += compra.precio;
                    }

                return acumulado;
            }, 0)
    }

console.log(calcularGasto3(pedidos, "Ana"));

/*
    EJERCICIO 2: Resumen de pedidos

    Escribe una función resumenPedidos(lista) que devuelva un nuevo array de strings.

    Cada string debe tener exactamente este formato: "Pedido [id] ([cliente]) - Artículos: [cantidad_de_compras]".
*/

    const resumenPedidos = (lista) => lista.map(({id, cliente, compras}) => `Pedido ${id} (${cliente}) - Artículos: ${compras.length}`);

    console.log(resumenPedidos(pedidos));

/*
    EJERCICIO 3: Modificación segura

    Escribe una función marcarEntregado(pedido) que reciba un único objeto de pedido (no la lista entera).

    Si el estado del pedido es "entregado" o "cancelado", debe devolver el objeto original intacto.

    Si el estado es "pendiente", debe devolver un nuevo objeto con el estado cambiado a "entregado" y con una nueva 
    propiedad añadida llamada procesado: true.

    Demuestra con un par de console.log que, tras pasar el pedido de "Luis" por esta función,
    el objeto original de Luis en el array no ha sufrido ninguna modificación.
*/

    const marcarEntregado = (pedido) =>
        {
            const {estado} = pedido;

            if(estado === "entregado" || estado === "cancelado")
                return pedido;

            if(estado === "pendiente")
                return {...pedido, estado : "entregado", procesado : true};
        }

    const pedido_luis = (lista) => lista.find(({cliente}) => cliente === "Luis");

    const p = pedido_luis(pedidos);

    console.log(p);

    console.log(marcarEntregado(p));

    console.log(p);


/*
    EJERCICIO 4: Catálogo de éxito

    Escribe una función obtenerProductosExitosos(lista) que devuelva un único array plano de strings que contenga 
    los nombres de los productos que pertenecen a pedidos cuyo estado sea "entregado".

    Si un producto se ha vendido en distintos pedidos, debe aparecer repetido en el array final.

    El resultado exacto devuelto por consola debe ser: ['Ratón', 'Teclado', 'Cable USB', 'Ratón']
*/

        //  1 SOLUCIÓN
        const obtenerProductosExitosos2 = (lista) => lista
        .filter(({estado}) => estado === "entregado")
        .flatMap(({compras}) => compras.map(compra => compra.prod));


        //  2 SOLUCIÓN
        const  obtenerProductosExitosos = (lista) => lista.
        filter(({estado}) => estado === "entregado").
        flatMap(({compras}) => 
            {
                const array_nuevo = [];

                for(let compra of compras)
                    array_nuevo.push(compra.prod);

                return array_nuevo;
            });


        console.log(obtenerProductosExitosos(pedidos));

/*
    EJERCICIO 5

    Crea una constante llamada facturas que contenga un array de objetos.
    Debes modelar la siguiente información respetando lo siguiente:

    
    Una factura con el identificador 101, servida en la "Terraza". Ya está pagada (true). Contiene dos artículos
    consumidos: un "Café" que cuesta 1.50, y una "Tostada" que cuesta 2.80.

    Una factura con el identificador 102, servida en el "Salón". Aún no está pagada (false). Contiene un solo artículo
    un "Menú del día" que cuesta 12.00.

    Una factura con el identificador 103, servida en la "Barra". Ya está pagada (true). Contiene dos artículos:
    una "Cerveza" de 3.00 y unas "Bravas" de 4.50.
*/