<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto más caro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        p {
            color: #666;
            font-size: 18px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Producto más caro</h1>
        <?php
      
        $productos = array(
            'Manzanas' => 2.5,
            'Plátanos' => 1.8,
            'Naranjas' => 3.2,
            'Peras' => 2.0
        );

       
        $producto_mas_caro = '';
        $precio_mas_alto = 0;

        foreach ($productos as $producto => $precio) {
            if ($precio > $precio_mas_alto) {
                $precio_mas_alto = $precio;
                $producto_mas_caro = $producto;
            }
        }
  
        echo "<p>El producto más caro es: $producto_mas_caro, con un precio de $$precio_mas_alto</p>";
        ?>
    </div>
</body>
</html>
