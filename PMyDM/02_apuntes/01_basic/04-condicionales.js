let age = 37

//  If, else if, else

//  1 EJEMPLO
if(age > 18)
    console.log("Es mayor de edad")
else if (age === 18)
    console.log("Tiene exactamente 18 años")
else 
    console.log("Es menor de edad")


//  2 EJEMPLO
if(num % 3 === 0)
    console.log("Es múltiplo de 3")
else 
    console.log("No es múltiplo de 3")


//  3 EJEMPLO
let mensaje = "Es múltiplo de 3"

if(num % 3 !== 0)
    mensaje = "No es múltiplo de 3"

console.log(mensaje)



//  Operador ternario

const message = age > 18 ? "Es mayor de edad" : "Es menor de edad"
console.log(message)

num % 3 === 0 ? console.log("Es múltiplo de 3") : console.log("No es múltiplo de 3")
