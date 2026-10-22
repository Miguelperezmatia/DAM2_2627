<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table border = "5" style="background-color: grey; border-collapse: collapse;">

        <?php 
    
            $altura = $_POST["altura"];

            for($i=0; $i < $altura; $i++)
            {
                echo "<tr>";

                    for($j=0; $j < $altura; $j++)
                        {
                            if($i === $j)
                                echo "<td style='background-color: green;'>" . rand() . "</td>";

                            else 
                                echo "<td>" . rand() . "</td>";
                        }

                echo "</tr>";
            }
        ?>  

    </table>
    
</body>
</html>