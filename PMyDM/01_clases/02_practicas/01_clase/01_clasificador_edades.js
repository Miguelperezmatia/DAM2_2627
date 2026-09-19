const prompt = require('prompt-sync')();


function leerEdad()
{
    let edad = 0

    while(true)
    {
        edad = parseInt(prompt("Escribe tu edad: "))

        if(!isNaN(edad))
            return edad

        console.log("Escribe un dato válido")
    }
}


function clasificarEdad(edad)
{
    if(edad < 2)
        console.log("Bebé")
    else if(edad < 12)
        console.log("Niño")
    else if(edad < 18)
        console.log("Adolescente")
    else if(edad < 65)
        console.log("Adulto")
    else
        console.log("Mayor")
}

let edad = leerEdad()
clasificarEdad(edad)