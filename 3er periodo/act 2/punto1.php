<IDOCTYPE html>
<html lang="es">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width-device-width, initial-scale-1.0">
       <title>Capitales de Colombia</title>
    </head>
    <body>
    
   <?php
     // Definir la matriz con las ciudades capitales de Colombia
    $ciudadesColombia = array(
    array("Villavicencio", "Meta"), // Ciudad 1
    array("Cali", "Valle del Cauca"), // Ciudad 2
    array("Pasto", "Cauca") // Ciudad 3
    );
    
// imprimir el numero de elementos en la matriz 
echo "<h2>Capitales de Colombia</h2>";
echo "<p>Numeros de ciudades:" . count($ciudadesColombia) . "</p>"; //contador de elemntos 

// Imprimir la tabla con las ciudades capitales 
echo "<table border='1'>";
echo "<tr><th>Ciudad</th><th>Departamento</th></tr>";

  // Bucle para recorrer la matriz y mostrar la información en la tabla
foreach ($ciudadesColombia as $ciudad) {
    echo "<tr>";
    foreach ($ciudad as $detale) {
echo "<td>$detale</td>"; // Imprimir cada detalle (nombre de la ciudad o departamento)
}
  echo"</tr>";
}

echo " </table>";
?>
    </body>
    </html>
