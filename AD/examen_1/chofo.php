<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1 style="text-align: center; color: green;">CHOFO</h1>

    <p style="text-align: center;">Tiene dos apuestas para ganarme</p>

    
    <form action="batallafinal.php" method="post">
        
        <label> Tu número (1-10)</label>
        <br>
        <input style="text-align:center; border: solid 3px black; padding: 20px;" type="number" name="numero" placeholder="1...10" required>

        <input style="background-color: green; color: white; border: 5px solid black; box-shadow: inset; padding: 20px;" type="submit" value="¡A luchar!">
        <br><br>

        <label>Apuesta 1</label>
        <br>

    <select style="text-align:center; border: solid 3px black; padding: 3px;" name="boton1">

        <option value="jugador a diferencia de 1">Jugador a diferencia de 1</option>
        <option value="Jugador a diferencia de 2">Jugador a diferencia de 2</option>
        <option value="iguales">Iguales</option>

    </select>

    <br><br>

        <label>Apuesta 2</label>
        <br>
    <select style="text-align:center; border: solid 3px black; padding: 10px;" name="boton2">

        <option value="jugador a diferencia de 1">Jugador a diferencia de 1</option>
        <option value="Jugador a diferencia de 2">Jugador a diferencia de 2</option>
        <option value="iguales">Iguales</option>

    </select>

    </form>

    <?php 

    ?>
    
</body>
</html>