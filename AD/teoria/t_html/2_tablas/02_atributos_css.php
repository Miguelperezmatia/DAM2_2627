<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!--
        Van dentro de style = "..."


        background-color:     Cambia el color de fondo de la tabla completa, de una fila o de una celda individual.
                              Puede ir en table, tr o td

        border-collapse:      Une los bordes de las celdas
                              Va en table

        padding:              Crea espacio interno entre el texto y los bordes de la celda para que el contenido no quede pegado a la línea
                              Va en td

        text-align:           Alinea el contenido dentro de la celda (center, left, right)
                              Puede ir en tr o td

        width                 Ancho 
                              Puede ir en table o en td
                              
        height                Alto
                              Puede ir en table o en tr
    -->

  <table border="1" style="background-color: green; border-collapse: collapse;">

    <tr style="text-align: center;">
        <td style="background-color: blue; padding: 10px;">AZUL</td>
        <td style="padding: 10px;">AMARILLO</td>
        <td style="padding: 10px;">BLANCO</td>
    </tr>

    <tr>
        <td style="padding: 10px;">ROJO</td>
        <td style="padding: 10px;">VERDE</td>
        <td style="padding: 10px;">MORADO</td>
    </tr>

</table>

    

</body>
</html>
