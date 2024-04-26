<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Números Aleatorios</title>

</head>

<body>

    <h1>Números Aleatorios</h1>

    <div class="container">

        <?php
         for ($i = 0; $i < 10; $i++) {
         $numeros[] = rand(1, 100);

        }


        $pares = [];    
       $impares = [];
            foreach ($numeros as $numero) {    
            if ($numero % 2 == 0) {  
             $pares[] = $numero;   
              } else {              
            $impares[] = $numero;            }   
                                                        
        }
        echo "<div class='box pares'>";  
        echo "<h2>Números pares</h2>";      
        foreach ($pares as $numero) {          
        echo "$numero<br>";        }       
         echo "</div>";
        echo "<div class='box impares'>";   
        echo "<h2>Números impares</h2>";        
        foreach ($impares as $numero) {            
        echo "$numero<br>";        }       
        echo "</div>";        
        ?>    
        </div>
    </body></html>

