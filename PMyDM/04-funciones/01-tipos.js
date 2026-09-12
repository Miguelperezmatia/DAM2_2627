//  Sin parámetros ni retorno

function saludar()
{
    console.log("HOLA")
}



//  Con parámetro

function saludarUsuario(name)
{
    console.log(`HOLA ${name}`)
}

saludar()                   //  HOLA
saludarUsuario("Miri")      //  HOLA Miri


//  Con parámetros y retorno

function sumar (num1, num2)
{
    return num1 + num2
}

const resultado = sumar(10,20)
console.log(resultado)              //  30


//  Funciones anónimas: Son las que no tienen nombre, pero se pueden asignar a una variable o constante

const mensaje = function(name)
{
    console.log(`Mi nombre es ${name}`)
}

mensaje("Miguel")       //  Mi nombre es Miguel



//  Funciones flecha:   Son funciones anónimas con una sintáxis más simplificada

const mensajeDos = (nombre, edad) => console.log(`Mi nombre es ${nombre} y  tengo ${edad} años`)
mensajeDos("Miguel", 24)    //  Mi nombre es Miguel y  tengo 24 años

const multiplicar = (num1, num2) => num1 * num2
console.log(multiplicar(5, 4))                      //  20