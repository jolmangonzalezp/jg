<!DOCTYPE html>
<html lang="es_CO">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jolman Gonzalez - <?php $page ?></title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./img/jg_dev.svg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/6b7b5c50e3.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="logo">
            <a href="/">
                <div class="img">
                    <img src="./img/jg_dev.svg" alt="">
                </div>
            </a>
        </div>
        <nav>
            <ul>
                <li <?php if($page == 'Inicio') {echo "class='active'";} ?>><a href="">Inicio</a></li>
                <li <?php if($page == 'Acerca de') {echo "class='active'";} ?>><a href="">Acerca de mi</a></li>
                <li <?php if($page == 'Portafolio') {echo "class='active'";} ?>><a href="">Portafolio</a></li>
                <li <?php if($page == 'Contacto') {echo "class='active'";} ?>><a href="">Contacto</a></li>
            </ul>
        </nav>
    </header>