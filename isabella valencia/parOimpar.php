<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Portafolio PHP</title>
    <style>
    body,
    html {
        height: 100%;
        margin: 0;
        font-family: Arial, sans-serif;
        background: #f4f4f4;
    }

    .navbar {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #333;
        color: white;
        padding: 10px 0;
    }

    .navbar a {
        color: white;
        padding: 14px 20px;
        text-decoration: none;
        text-transform: uppercase;
    }

    .navbar a:hover {
        background-color: #ddd;
        color: black;
    }

    .header {
        text-align: center;
        padding: 50px;
        background: #007bff;
        color: white;
    }

    .header h1 {
        font-size: 2.5em;
    }

    .main {
        padding: 20px;
        flex: 1;
    }

    .container {
        width: 80%;
        margin: auto;
    }

    .card {
        background: white;
        border-radius: 5px;
        padding: 20px;
        margin-top: 20px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    .footer {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 10px 0;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>
<nav class="navbar bg-body-tertiary fixed-top" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Portafolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Portafolio PHP</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="As" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Condicionales 1
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="parOimpar.php">Par o impar</a>
                                </li>
                                <li><a class="dropdown-item" href="positivoOnegativo.php">Numero
                                        Positivo
                                        o Negativo</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="As" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Ejercicios
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="punto2.php">Generación de facturas
                                        mensuales</a>
                                </li>
                                <li><a class="dropdown-item" href="ciclos.php">ciclos</a></li>
                                <li><a class="dropdown-item" href="punto3.php">Lista Tareas
                                        Domésticas</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="s1.php">Precio Entrada</a>
                                <li>
                                <li>
                                    <a class="dropdown-item" href="s2.php">Factura</a>
                                <li>
                                <li>
                                    <a class="dropdown-item" href="s3.php">Tabla Multiplicar</a>
                                <li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="As" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Primer Periodo
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="calificacion.php">Calificacion</a>
                                </li>
                                <li><a class="dropdown-item" href="calculadora .php">Calculadora</a></li>
                                <li><a class="dropdown-item" href="aplicacion.php">Aplicación</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="calcular_imc.php">IMC</a>
                                <li>
                                <li>
                                <a class="dropdown-item" href="calcular_nota.php">Calcular Nota</a>
                                <li>
                                <li>
                                    <a class="dropdown-item" href="calculo_figuras.php">Area Figuras</a>
                                <li>
                                <li>
                                    <a class="dropdown-item" href="Ejercicio-1.php">sumas</a>
                                <li>
                                <li>
                                    <a class="dropdown-item" href="holamundo.php">Hola Mundo</a>
                                <li>
                                <li>
                                    <a class="dropdown-item" href="imc.php">IMC 2</a>
                                <li>
                                <li>
                                    <a class="dropdown-item" href="ejercicios.php">Area de triángulo</a>
                                <li>
                                <li>
                                    <a class="dropdown-item" href="punto2.2.php">Generación de facturas</a>
                                <li>
                                <li>
                                    <a class="dropdown-item" href="punto1.php">Salario</a>
                                <li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <br><br><br>

    <div class="header" id="home">
        <h1>Portafolio PHP</h1>
        <p>Explorando el mundo del desarrollo web con PHP</p>
    </div>

    <div class="main">
        <center>
            <div class="container">
                <form action="" method="post">
                    <label for="numero">Ingrese un número:</label>
                    <input type="number" name="numero" id="numero" required>
                    <input type="submit" value="Verificar">
                </form>

                <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    if ($numero % 2 == 0) {
        echo "El número $numero es par.";
    } else {
        echo "El número $numero es impar.";
    }
}
?>

            </div>
        </center>
</body>

</html>