let age = 37

//  If, else if, else


if(age > 18)
    console.log("Es mayor de edad")
else if (age === 18)
    console.log("Tiene exactamente 18 años")
else 
    console.log("Es menor de edad")


//  Operador ternario

const message = age > 18 ? "Es mayor de edad" : "Es menor de edad"
console.log(message)