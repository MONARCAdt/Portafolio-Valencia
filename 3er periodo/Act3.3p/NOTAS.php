
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Notas Escolares</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {background-color: #f5f5f5;}
    </style>
</head>
<body>
    <h1>Registro de Notas Escolares</h1>
    <?php
    $notas = [
        "Ingles" => [
            "Estudiante1" => 9.5,
            "Estudiante2" => 8.7,
            "Estudiante3" => 7.4,
        ],
        "Sociales" => [
            "Estudiante1" => 8.2,
            "Estudiante2" => 9.1,
            "Estudiante3" => 6.5,
        ],
        "Educacion fisica" => [
            "Estudiante1" => 7.8,
            "Estudiante2" => 8.4,
            "Estudiante3" => 9.0,
        ]
    ];

    echo '<table>';
    echo '<tr><th>Asignatura</th><th>Estudiante</th><th>Nota</th></tr>';

   
    foreach ($notas as $asignatura => $estudiantes) {
        foreach ($estudiantes as $nombre => $nota) {
            echo "<tr>";
            echo "<td>$asignatura</td>";
            echo "<td>$nombre</td>";
            echo "<td>$nota</td>";
            echo "</tr>";
        }
    }

    echo '</table>';
    ?>
</body>
</html>

