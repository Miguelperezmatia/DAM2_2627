/*
    Desarrollar una aplicación de consola que clasifique a una persona en una etapa vital basándose en su edad. 

    Requisitos del programa:

    Entrada de datos: El programa debe solicitar al usuario que introduzca su edad (como número entero).

    Lógica de clasificación: Dependiendo de la edad introducida, el sistema mostrará por consola uno de los siguientes mensajes:

        0 - 2: "Clasificación: Bebé"

        3 - 12: "Clasificación: Niño/a"

        13 - 17: "Clasificación: Adolescente"

        18 - 64: "Clasificación: Adulto/a"

        65 o más: "Clasificación: Tercera edad"

    Validación lógica: El programa debe rechazar edades negativas (menores que 0) y edades humanamente imposibles (por ejemplo, mayores a 130).
    En estos casos, debe advertir al usuario y volver a solicitar el dato
    El programa debe evaluar activamente si el dato no es un número válido, mostrar un mensaje de error amigable y pedir de nuevo el dato
*/
const prompt = require('prompt-sync')();


const pedirEdad = () => 
    {
        while(true)
            {                
                let edad = parseInt((prompt("Introduce tu edad: ")))
                
                if(isNaN(edad))
                    {
                    console.log("Debes escribir un número válido")
                    console.log("Inténtalo de nuevo")
                    }

                else if(edad < 0 || edad > 130)
                    {
                        console.log("Edad inválida")
                        console.log("Inténtalo de nuevo")
                    }
                else 
                    return edad
            }
    }

const clasificar = (edad) => 
    {
        if (edad >= 0 && edad <= 2)
            console.log("Clasificación: Bebé")
        else if (edad >=3 && edad <=12)
            console.log("Clasificación: Niño/a")
        else if (edad >= 13 && edad <= 17)
            console.log("Clasificación: Adolescente")
        else if(edad >=18 && edad <= 64)
            console.log("Clasificación: Adulto/a")
        else
            console.log("Clasificación: Tercera edad")
    }

let edad = pedirEdad()
clasificar(edad)