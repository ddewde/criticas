<?php
    echo "<h2><a href='index.php'>Volver al inicio</a></h2>";
    echo "<h1>Voy a hacer un bucle For de sellos</h1>";

    
    
        for($contador = 0; $contador < 42; $contador++){
            if($contador < 41){
                echo "El sello actual es $contador<br/>";            
            } else {
                echo "<h2><b>El sello sería $contador. Su bucle ha terminado.</b></h2>";
                echo "<h2><a href='index.php'>Volver al inicio</a></h2>";
            }
            
        }
    
    



?>