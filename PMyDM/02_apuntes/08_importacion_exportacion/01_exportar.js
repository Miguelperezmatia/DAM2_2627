//  Exportar una constante
export const PRECIO_BASE = 10.50;


//  Exportar una función
export function calcularPrecio(producto) 
{
    let precio_final = PRECIO_BASE;

    switch (producto) 
    {
        case "perrito":
            precio_final += 4;        
            break;
    
        case "tortitas":
            precio_final += 2;        
            break;

        default:
            precio_final += 0.5;
            break;
    }

    return precio_final;
}


//  Exportar una promesa

export const PEDIDO_FAMILIAR = new Promise((resolve, reject) => 
{
    let hay_comida = true;

    if(hay_comida)
         resolve("pedido en curso");   
        
    else 
        reject("no hay comida");
})



//  Exportar una función asíncrona

export async function pedido_familiar_2() 
{
  try 
  {
    const mensaje = await PEDIDO_FAMILIAR;
    console.log(mensaje + " PERFECTO");
  } catch (error) 
  {
    console.log(error + " ERRORAZO");
  }
}