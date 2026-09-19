console.log("HOLA MUNDO")

//  CONSTANTES
const PI = 3.141592
console.log("PI: " + PI)

//  VARIABLES
let nombre = "Miguel"
nombre = "Carlos"
console.log(`Nombre ${nombre}`)


//  TIPOS

let numero = 23
console.log(typeof numero)              //  number


let cadena = "JavaScript es un lenguaje no tipado"
console.log(typeof cadena)              //  string  


let is_Conductor = true                 
console.log(typeof is_Conductor)        //  boolean


//  CONCATENANDO TIPOS

let n = "Hola"
console.log(n + 10 + " TIPO: " + typeof n)        //  Hola10 TIPO: string

n = true
console.log(n + 10 + " TIPO: " + typeof n)        //  11 TIPO: boolean


//  OPERADORES

console.log(11 % 0)     //  NaN
console.log(11 % 12)    //  11
console.log(-1 % 17)    //  -1
console.log(-16 % 17)    //  -16

console.log(2 ** 3);  // 8   -> potencia (2 elevado a 3)


//  MÚLTIPLO DE UN NÚMERO

let num = 6

if(num % 3 === 0)
    console.log("Es múltiplo de 3")
else 
    console.log("No es múltiplo de 3")



let mensaje = "Es múltiplo de 3"

if(num % 3 !== 0)
    mensaje = "No es múltiplo de 3"

console.log(mensaje)


//  OPERADOR TERNARIO
num % 3 === 0 ? console.log("Es múltiplo de 3") : console.log("No es múltiplo de 3")




