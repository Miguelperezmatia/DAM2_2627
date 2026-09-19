/*
    FizzBuzz es el ejercicio clásico para practicar bucles y condicionales a la vez. La regla: recorre los números del 1 al 100. 
    Para cada uno, si es múltiplo de 3 imprime "Fizz"; si es múltiplo de 5 imprime "Buzz"; si es múltiplo de ambos imprime "FizzBuzz"; 
    si no es múltiplo de ninguno, imprime el número tal cual.
    Envuélvelo en una función reutilizable que reciba el límite como parámetro, en vez de dejarlo fijo en 100.
*/


const fizzBuzz = (limite) => 
    {
        for(let i = 1; i<=limite; i++)
        {
            if(i % 3 === 0 && i % 5 === 0)
                console.log("FizzBuzz")
            else if(i % 5 === 0)
                console.log("Buzz")
            else if(i % 3 === 0)
                console.log("Fizz")
            else 
                console.log(i)
        }
    }

fizzBuzz(20)