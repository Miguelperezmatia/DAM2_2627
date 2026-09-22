<?php

//  BUCLE FOR

    $limite = 100;

    for($i=1 ; $i<=$limite; $i++)
        {
            if($i === $limite)
                echo $i;
            else 
                echo $i . ", ";
        }

    echo "<br><br>";

    $comma = "";

    for($i = 1 ; $i <= $limite; $i++)
        {
            echo $comma . $i;
            $comma=", ";        
        }


?>