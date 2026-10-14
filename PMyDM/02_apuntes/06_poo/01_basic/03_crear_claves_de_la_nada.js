const user = {};
user.nombre = "Ana";    // Crea literalmente la clave "nombre" y el valor "Ana"


// SABER SI EXISTE UN ELEMENTO O NO

const registro = {};
let elementoActual = "categoría_A"; 

if (registro[elementoActual])
    registro[elementoActual]++; 
else 
    registro[elementoActual] = 1; 

/*
    Si se puede acceder a un elemento es que existe
        Por tanto. le sumamos uno más a su valor

    Si no se puede acceder es que no existe aún:
        Por tanto, le ponemos 1 al valor
*/