/*
    Hay veces que queremos asignar valores por defecto a los valoresw de los parámetros por si el usuario final
    se le olvida hacerlo
*/


const suma = (num1 = 0, num2 = 0) => console.log(num1 + num2)

suma()      //  0
suma(5)     //  5
suma(2,7)   //  9