<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>ESTACIÓN</h1>

    <?php 
        $mes = $_POST ["mes"];

        $mesMinusculas = strtolower($mes);

        function mostrarMes($mesMinusculas)
        {
            return "El mes $mesMinusculas corresponde a la estación ";
        }
        
        switch($mesMinusculas){
            case "abril":
            case "mayo":
            case "junio":
                if($mesMinusculas === "abril")
                    echo " y el horóscopo es ARIES";
                else if($mesMinusculas === "mayo")
                    echo " y el horóscopo es TAURO";
                else if($mesMinusculas === "junio")
                    echo " y el horóscopo es GÉMINIS";
                break;
            case "julio":
            case "agosto":
            case "septiembre":
                echo mostrarMes($mesMinusculas) . "PRIMAVERA";
                break;
            case "octubre":
            case "noviembre":
            case "diciembre":
                echo mostrarMes($mesMinusculas) . "PRIMAVERA";
                break;
            case "enero":
            case "febrero":
            case "marzo":
                echo mostrarMes($mesMinusculas) . "PRIMAVERA";
                if($mesMinusculas === "enero")
                    echo " y el horóscopo es CAPRICORNIO";
                else if($mesMinusculas === "febrero")
                    echo " y el horóscopo es ACUARIO";
                else if($mesMinusculas === "marzo")
                    echo " y el horóscopo es PISCIS";
                break;
            default:
                echo "No has escrito el nombre del mes correctamente";
                }
    ?>
    
</body>
</html>