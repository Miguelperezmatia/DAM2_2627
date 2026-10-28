/*
    Una Promesa es un objeto que representa el resultado futuro de una operación que tarda un tiempo en completarse
    permitiéndote hacer otras cosas mientras esperas el resultado

    
    CREACIÓN DE LA PROMESA

    new Promise (resolve, reject)
    
        Recibe dos parámetros:

            1)  resolve (valor): 
            
                Recibe a su vez un parámetro
                    valor representa el resultado exitoso de la operación (puede ser un String, un numero, un objeto...)
                    se convierte en el parámetro que recibe tu .then(X => ...)

                Lo ejecutas cuando la tarea tiene éxito. 


            2)  reject (error): 
            
                Recibe a su vez un parámetro
                        error representa el resultado fallido de la operación (puede ser un String, un numero, un objeto...)
                        se convierte en el parámetro que recibe tu .catch(Y => ...)

                Lo ejecutas si algo sale mal. 
*/


export const PEDIDO = new Promise((resolve, reject) =>
{
    let haber_comida = true;

    if(haber_comida)
        resolve("pedido en curso");
    else 
        reject("pedido rechazado");  
});