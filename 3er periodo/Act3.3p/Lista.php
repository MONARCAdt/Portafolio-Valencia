<?php
session_start();

if (!isset($_SESSION['tareas'])) {
    $_SESSION['tareas'] = [
        ['tarea' => 'Sacar a la mascota', 'completada' => false],
        ['tarea' => 'Leer el libro de historia', 'completada' => false],
        ['tarea' => 'Repasar para el quiz de quimica', 'completada' => false],
        ['tarea' => 'Entregar las diapositivas de filosofia', 'completada' => false],
        ['tarea' => 'Organizar la casa', 'completada' => false],
    ];
}

if (isset($_POST['completar'])) {
    foreach ($_POST['tareaIndex'] as $index => $estado) {
        $_SESSION['tareas'][$index]['completada'] = true;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tareas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        .tarea {
            margin: 5px;
            padding: 10px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .completada {
            text-decoration: line-through;
            color: #888;
        }
    </style>
</head>
<body>
    <h1>Lista de Tareas</h1>
    
    <form method="post">
        <?php foreach ($_SESSION['tareas'] as $index => $tarea): ?>
            <div class="tarea <?php if ($tarea['completada']) echo 'completada'; ?>">
                <input type="checkbox" name="tareaIndex[<?php echo $index; ?>]" onchange="this.form.submit()" <?php if ($tarea['completada']) echo 'checked'; ?>>
                <?php echo $tarea['tarea']; ?>
            </div>
        <?php endforeach; ?>
        <input type="hidden" name="completar" value="true">
    </form>
</body>
</html>
