async function funcionSerFutbolista()
{
    //  CREACIÓN DE LA PROMESA

    const serFutbolista = 
    new Promise((resolve, reject) =>
        {
            const serCrack = true;
            const tenerPiernas = true;
            const tenerEnchufe = true;

            if(serCrack && tenerPiernas && tenerEnchufe)
                resolve("ERES FUTBOLISTA PROFESIONAL");
            else 
                reject("ERES UN DON NADIE");
        });

    
        
    //  CONSUMICIÓN DE LA PROMESA

    try
    {
        const mensaje = await serFutbolista;
        console.log(mensaje);

    } catch(excepcion)
    {
        console.log(excepcion);
    }
}