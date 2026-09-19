const prompt = require('prompt-sync')();


function leerDato(mensaje) 
    {
        let dato = 0;

        while(true)
        {
            dato = Number.parseFloat(prompt(mensaje))

            if(!isNaN(dato))
                return dato

            console.log("Escribe un valor válido")
        }
    }

const calculoImc = (peso, altura) => peso / altura ** 2

function clasificarImc(imc)
{
    if (imc < 18.5) 
        console.log("Bajo peso")

    else if (imc < 25) 
        console.log("Peso normal")

    else if (imc < 30) 
        console.log("Sobrepeso")

    else
        console.log("Obesidad")
}

function mostarImc(imc)
{
    console.log(`Tu IMC es: ${imc.toFixed(2)}`)
}

const PESO = leerDato("Escribe tu peso: ")
const ALTURA = leerDato("Escribe tu altura: ")
const imc = calculoImc(PESO, ALTURA)
mostarImc(imc)
clasificarImc(imc)