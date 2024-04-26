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
            <a class="navbar-brand" href="#">Portafolio</a>
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
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="As" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Condicionales 1
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="isabella valencia\parOimpar.php">Par o impar</a>
                                </li>
                                <li><a class="dropdown-item" href="isabella valencia\positivoOnegativo.php">Numero
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
                                <li><a class="dropdown-item" href="isabella valencia\punto2.php">Generación de facturas
                                        mensuales</a>
                                </li>
                                <li><a class="dropdown-item" href="isabella valencia\ciclos.php">ciclos</a></li>
                                <li><a class="dropdown-item" href="isabella valencia\punto3.php">Lista Tareas
                                        Domésticas</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="isabella valencia\s1.php">Precio Entrada</a>
                                <li>
                                <li>
                                    <a class="dropdown-item" href="isabella valencia\s2.php">Factura</a>
                                <li>
                                <li>
                                    <a class="dropdown-item" href="isabella valencia\s3.php">Tabla Multiplicar</a>
                                <li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="As" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Primer Periodo
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="isabella valencia\calificacion.php">Calificacion</a>
                                </li>
                                <li><a class="dropdown-item" href="isabella valencia\calculadora .php">Calculadora</a></li>
                                <li><a class="dropdown-item" href="isabella valencia\aplicacion.php">Aplicación</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="isabella valencia\calcular_imc.php">IMC</a>
                                <li>
                                <li>
                                <a class="dropdown-item" href="isabella valencia\calcular_nota.php">Calcular Nota</a>
                                <li>
                                <li>
                                    <a class="dropdown-item" href="isabella valencia\calculo_figuras.php">Area Figuras</a>
                                <li>
                                <li>
                                    <a class="dropdown-item" href="isabella valencia\Ejercicio-1.php">sumas</a>
                                <li>
                                <li>
                                    <a class="dropdown-item" href="isabella valencia\holamundo.php">Hola Mundo</a>
                                <li>
                                <li>
                                    <a class="dropdown-item" href="isabella valencia\imc.php">IMC 2</a>
                                <li>
                                <li>
                                    <a class="dropdown-item" href="isabella valencia\ejercicios.php">Area de triángulo</a>
                                <li>
                                <li>
                                    <a class="dropdown-item" href="isabella valencia\punto2.2.php">Generación de facturas</a>
                                <li>
                                <li>
                                    <a class="dropdown-item" href="isabella valencia\punto1.php">Salario</a>
                                <li>
                                
                            </ul>
                       <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="As" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                 3er Periodo
                            </a>
                                <ul class="dropdown-menu">
                                   
                                <li><a class="dropdown-item" href="3er periodo/Act1/Act pr3.html">Acti1</a></li>
                                <li><a class="dropdown-item" href="3er periodo/act2/punto1.php">Act2/punto1</a></li>
                                <li><a class="dropdown-item" href="3er periodo/act2/punto2.php">Act2/punto2</a></li>
                                <li><a class="dropdown-item" href="3er periodo/act2/punto3.php">Act2/punto3</a></li>
                                <li><a class="dropdown-item" href="3er periodo/Act3.3p/index.html">Act3</a></li> </li>
                                <li><a class="dropdown-item" href="3er periodo/Quiz/punto1.php">QuizP1</a></li> </li>
                                <li><a class="dropdown-item" href="3er periodo/Quiz/punto2.php">QUIZP2</a></li> </li>
                                <li><a class="dropdown-item" href="3er periodo/Quiz/punto3.php">QuizPs3</a></li> </li>
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
        <div class="container">
            <div class="card" id="about-php">
                <h2>DEFINICION DE PHP</h2>
                <p>Definición:php

               PHP es el acrónimo recursivo de Hypertext Preprocessor, un lenguaje de programación de código abierto muy utilizado especialmente en el desarrollo de aplicaciones y web,
                este lenguaje de código puede ser incrustado en HTML5 puesto que es un código muy variable favorece el enlace entre la interfaz de usuario y los servidores.

                 Diferenciar el lenguaje de programación PHP con los típicos como pueden ser HTML, CSS o JavaScript es sencillo,
                 estos último son leídos primero por el navegador al momento de acceder a una web, mientras que PHP se ejecuta directamente en el servidor de la página.</p>
                 <h2>PARA QUE SIRVE PHP</h2>
                 <p>
                 La principal función de PHP, pero no la única, es la agilidad y velocidad con la que conecta a los usuarios con los servidores gracias a que esta se ejecuta
                 en las bases de datos de los servidores como ya hemos comentado.
                 Podemos encontrar PHP en todos los plugins y plantillas de WordPress, es uno de los usos más extendidos de este lenguaje.
                 Al ser un código abierto y simple es muy sencillo gestionar todas la extensiones que sirven para conservar todos los sitios web de la plataforma actualizados, 
                 según se vaya creando diferentes funciones.
                 En los Comercios Electrónicos o Ecommerce también aparece en gran medida el PHP. 
                 Es muy necesario que en este tipo de páginas web la velocidad de carga sea alta y el tiempo de espera bajo para dar confianza al cliente,
                 esto lo proporciona este lenguaje por su rápida comunicación con las bases de datos. En un E-commerce es frecuente que imágenes y vídeos se vinculen con un producto para que lo vea el usuario,
                 por eso es necesario agilizar la carga de estos contenidos y el lenguaje perfecto para hacerlo es PHP. </p>
            </div>

            <div class="card" id="features">
                <h2>Características de PHP</h2>
                <p>CARACTERÍSTICAS PRINCIPALES DE PHP
                <p>Fácil de aprender y utilizar: PHP es un lenguaje de programación sencillo y accesible, por lo que es fácil de aprender para los programadores principiantes.</p>
                <p>Integración con HTML: PHP se puede utilizar fácilmente dentro de las páginas HTML, lo que lo hace ideal para la creación de aplicaciones web dinámicas.</p>
                <p>Compatible con Múltiples Plataformas: PHP se ejecuta en una amplia variedad de sistemas operativos, incluyendo Windows, Linux y MacOS.</p>
                <p>Código Abierto: PHP es un lenguaje de programación de código abierto, lo que significa que es gratuito y está disponible para su uso y modificación por cualquier persona.</p>
                <p>Gran Comunidad de Desarrolladores: PHP cuenta con una amplia y activa comunidad de desarrolladores, lo que significa que hay una gran cantidad de recursos y soluciones disponibles en línea.</p>
                <p>Múltiples Extensiones Disponibles: PHP cuenta con una amplia variedad de extensiones y bibliotecas disponibles, lo que permite a los programadores agregar funcionalidades adicionales a sus aplicaciones.</p>
                <p>Seguridad: PHP incluye características de seguridad integradas, lo que lo hace seguro para el desarrollo de aplicaciones web.</p>
            </div>
</body>

</html>