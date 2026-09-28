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


//  Función normal

function calcularMedia (num1, num2, num3, num4)
{
    return (num1 + num2 + num3 + num4) / 4
}

//  Funcion flecha
const calcularMediaFlecha = (num1, num2, num3, num4) => (num1 + num2 + num3 + num4) / 4;

console.log(calcularMedia(1,7,2,3));
console.log(calcularMediaFlecha(1,7,2,3));

//  Convertir un while en un for

let saldo = 100;
let meses = 0;

for (let index = 0; index < Number.MAX_VALUE; index++) 
{
    if(saldo <= 0)
        break;

    saldo -= 30;
    meses += 1;  
}

console.log(meses)
console.log(saldo)

saldo = 100;
meses = 0;

for (saldo = 100; saldo > 0; saldo-=30) 
{
    meses += 1;  
}

console.log(meses + " " + saldo)


saldo = 100;
meses = 0;

for (; saldo > 0;) 
{
    saldo -= 30;
    meses += 1;  
}

console.log(meses)
console.log(saldo)
