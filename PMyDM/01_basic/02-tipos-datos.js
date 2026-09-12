let name = "Miguel"
let age = 37
let height = 1.45
let isStudent = false


let indefinido              //  No tiene un valor concreto, pero se imprime undefined
console.log(indefinido)

let nullValue = null        //  nula, ausencia de valor
console.log(nullValue)

let mySymbol = Symbol("mySymbol")   //  Valores únicos

name = 9
name = true
console.log(name)   // true


//  Saber tipo de dato
console.log("Tipo de dato de name = " + typeof (name))