<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1 style="color: red; text-align: center;">CHOFI</h1>

    <p style="text-align: center;">¿Te atreves a retarme?</p> <br><br><br><br>


    <form style="text-align: center;" action="batalla1.php" method="post">

        <label> Tu número (1-3)</label>
        <br>
        <input style="border: solid 2px black; padding: 20px;" type="number" name="numero" placeholder="1, 2 o 3" required>

        <input style="background-color: red; border: 5px solid black; box-shadow: inset; padding: 20px;" type="submit" value="¡A luchar!">
        <br><br><br><br>

        <label>Tu apuesta</label>
        <br>

    <select style="padding: 20px;" name="boton">

        <option value="jugador menor">Jugador menor</option>
        <option value="jugador mayor">Jugador mayor</option>
        <option value="iguales">Iguales</option>

    </select>

    </form>

    
</body>
</html>