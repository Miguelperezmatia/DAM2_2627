//  CALCULADORA IMC
const prompt = require('prompt-sync')();


function leerDato(message)
{
    return Number(prompt(message));
}

function calcularImc(peso, altura)
{
    return peso / (altura ** 2);
}

function clasificarImc(imc)
{
    if (imc < 18.5) 
        return "Bajo peso";
    else if (imc < 25) 
        return "Peso normal";
    else if (imc < 30) 
        return "Sobrepeso";
    else 
        return "Obesidad";
}

function redondearImc(imc)
{
    return imc.toFixed(2)
}


let peso = leerDato("PESO: ")
let altura = leerDato("ALTURA: ")

let imc = calcularImc(peso, altura)
imc = redondearImc(imc)
clasificacion = clasificarImc(imc)

console.log("Tu IMC es " + imc)
console.log(clasificacion)