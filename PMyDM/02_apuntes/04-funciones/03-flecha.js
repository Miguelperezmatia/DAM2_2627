// FUNCIONES FLECHA (ARROW FUNCTIONS)


/* 
   1. REGLAS DE LOS PARÁMETROS ()

    El uso de los paréntesis depende de cuántos datos reciba la función:
*/


/*  
    1 CASO

    Cero parámetros (Paréntesis OBLIGATORIOS):
*/

    const saludar = () => console.log("¡Hola, mundo!");



/*  
    2 CASO

    Un solo parámetro simple (Paréntesis OPCIONALES):
    Es el único caso donde puedes omitirlos para ahorrar código.
*/

    const calcularMitad = numero => numero / 2;
    const calcularMitad2 = (numero) => numero / 2;



/*
    3 CASO

    Dos o más parámetros (Paréntesis OBLIGATORIOS):
*/

    const multiplicar = (num1, num2) => num1 * num2;



/*
    4 CASO

    Al usar Desestructuración (Paréntesis OBLIGATORIOS):

        Si extraes propiedades al vuelo, necesitas los paréntesis para que 
        JavaScript no confunda las llaves con un bloque de código.
*/

    const mostrarNombre = ({nombre, edad }) => console.log(`${nombre} tiene ${edad} años`);
    mostrarNombre({ nombre: "Miguel", edad: 24 });




/* 
   2. EL USO DE RETURN: IMPLÍCITO VS EXPLÍCITO

        La regla de oro depende de si decides abrir llaves {} después de la flecha.
*/



/*
    1 CASO

        Sin llaves {} = Return IMPLÍCITO (Automático):
        Lo que pones a la derecha de la flecha se devuelve directamente.
*/

    const sumar = (a, b) => a + b; 
    console.log(sumar(5, 5)); 



/*
    2 CASO

        Con llaves {} = Return EXPLÍCITO (Obligatorio):
        Al abrir llaves, creas un bloque de código. Tienes que escribir "return" a mano.
*/

    const sumarBloque = (a, b) => 
        {
            const resultado = a + b;
            return resultado;               // OBLIGATORIO (si no, devuelve undefined)
        };




/* 
   
   3. FUNCIONES ANIDADAS Y LOS "DOS RETURNS"

        Cuando metes un método (como .reduce) dentro de una función principal y abres llaves, 
        pasas a tener dos funciones, y cada una debe devolver su dato.
*/

    const calcularTotal = (lista) => 
    {

        // RETURN EXTERNO: Saca el resultado final del reduce hacia afuera
        return lista.reduce((acumulado, actual) => 
        { 

            // RETURN INTERNO: Pasa el dato a la siguiente vuelta del reduce
            return acumulado + actual.precio; 
            
        }, 0);
    };


//  Si quitas todas las llaves, te ahorras escribir la palabra "return" ambas veces. 

    const calcularTotalRapido = (lista) => lista.reduce((acc, actual) => acc + actual.precio, 0);