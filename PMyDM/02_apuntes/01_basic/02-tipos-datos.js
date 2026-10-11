//  TIPOS DE DATOS

let name = "Miguel"         //  string
let age = 37                //  number
let height = 1.45           //  number, no existe el float o el double
let isStudent = false       //  boolean


let indefinido              
console.log(indefinido)     //  undefined

let nullValue = null        //  null
console.log(nullValue)

let mySymbol = Symbol("mySymbol")   //  Valores únicos



//  FUNCIÓN TIPO DE DATO: typeof (variable)
console.log("Tipo de dato de age = " + typeof (age))



//  CONCATENANDO TIPOS

let n = "Hola"
console.log(n + 10 + " TIPO: " + typeof n)        //  Hola10 TIPO: string

n = true
console.log(n + 10 + " TIPO: " + typeof n)        //  11 TIPO: boolean