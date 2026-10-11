//  Convertir un while en un for

let saldo = 100;
let meses = 0;


//  1)  Bucle simulando infinito con break
for (let index = 0; index < Number.MAX_VALUE; index++) 
{
    if(saldo <= 0)
        break;

    saldo -= 30;
    meses += 1;  
}

console.log(meses)
console.log(saldo)






//  2)  Bucle for tradicional y compacto

saldo = 100;
meses = 0;

for (saldo = 100; saldo > 0; saldo-=30) 
    meses += 1;  


console.log(meses + " " + saldo)







//  3) Bucle for camuflado de while

saldo = 100;
meses = 0;

for (; saldo > 0;) 
{
    saldo -= 30;
    meses += 1;  
}

console.log(meses)
console.log(saldo)

/*
    Las tres partes de la declaración de un for son opcionales. 
    
    Al dejar vacías la inicialización y la actualización, dejando solo la condición central, el for se comporta exactamente igual que un 
    bucle while (saldo > 0)
*/
