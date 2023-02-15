<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png"> <!-- Favicon -->
    <link rel="stylesheet" href="../css/style.css"> <!-- style.css ubicado en la carpeta public -->
    <script src="https://kit.fontawesome.com/4a0af06348.js" crossorigin="anonymous"></script> <!-- Script para libreria de iconos -->
</head>

<body id="bodyMenuSemanal">

    <header>
        <a href="index_nutricionista.php" id="logo"><img src="../img/3.png"></a>
        <nav>
            <ul id="menu">
                <li><a href="index_nutricionista.php"><i class="fa-regular fa-address-book"></i> Pacientes</a></li>
                <li><a href="nutricionista_menu.php"><i class="fa-solid fa-bowl-food"></i> Menús</a></li>
                <li><a href="#"><i class="fa-regular fa-comments"></i> Chat</a></li>
                <li><a href="#"><i class="fa-regular fa-bell"></i> Notificaciones</a></li>
            </ul>
        </nav>
        
        <div id="user">
            <div id="profile" onclick="menuToggle();">
                <img src="../img/icon.png">
            </div>
            <div id="profilemenu">
                <h3>¡ Hola **** !<br><span>Nutricionista</span></h3>
                <ul>
                    <li><i class="fa-regular fa-user"></i><a href="perfil_nutricionista.php">Mi perfil</a></li>
                    <li><a href="perfil_nutricionista.php"><i class="fa-solid fa-sliders"></i>Ajustes</a></li>
                    <li><a href="login.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>Cerrar sesión</a></li>
                </ul>
            </div>
        </div>
    
        <div id="menuicon">
            <i class="fa-solid fa-bars"></i>
        </div>
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <div class="centrarContenidoPerfil">
        <img src="/img/icon1.jpg" alt="cara" />
        <h4>Nombre del cliente</h4>
    </div>

    <div class="cabeceraSemana">
        <div class="semanaActual">
            <h2>Semana 1</h2>
        </div>
        <div class="semanaSiguiente">
            <h2 onclick=""><img src="/img/flecha-correcta.png" alt=""></h2>
        </div>
    </div>
    <div class="menuDia">
        <h3 id="menuDiah3">Lunes</h3>
        <h5 id="menuDiah5"><a href="receta_categoria_nutri">Desayuno</a><input type="search" placeholder="🔍Buscar" name="" id="searchMenuDia"></h5>
        <div id="caja">
            <div id="NombreComidas"><img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                <img id="infoIcon" onclick="" src="/img/informacion.png" alt="">
                <input type="checkbox" name="checkmark" id="checkmark">
            </div>
            <div><img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                <img id="infoIcon" src="/img/informacion.png" alt="">
                <input type="checkbox" name="checkmark" id="checkmark">
            </div>
            <div><img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                <img id="infoIcon" src="/img/informacion.png" alt="">
                <input type="checkbox" name="checkmark3" id="checkmark">
            </div>
            <h2 onclick=""><img id="slider" src="/img/flecha-correcta.png" alt=""></h2>
            <span>
                Sandwich de manzana <br> y granola
            </span>
            <span>
                Sandwich de manzana <br> y granola
            </span>
            <span>
                Sandwich de manzana <br> y granola
            </span>
        </div>
        <h5 id="menuDiah5"><a href="receta_categoria_nutri">Media mañana</a><input type="search" placeholder="🔍Buscar" name="" id="searchMenuDia"></h5>
        <div id="caja">    
            <div><img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                <img id="infoIcon" src="/img/informacion.png" alt="">
                <input type="checkbox" name="checkmark" id="checkmark">
            </div>
            <div><img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                <img id="infoIcon" src="/img/informacion.png" alt="">
                <input type="checkbox" name="checkmark" id="checkmark">
            </div>
            <div><img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                <img id="infoIcon" src="/img/informacion.png" alt="">
                <input type="checkbox" name="checkmark" id="checkmark">
            </div>
            <h2 onclick=""><img id="slider" src="/img/flecha-correcta.png" alt=""></h2>
            <span>
                Sandwich de manzana y granola
            </span>
            <span>
                Sandwich de manzana y granola
            </span>
            <span>
                Sandwich de manzana y granola
            </span>
        </div>  
        <h5 id="menuDiah5"><a href="receta_categoria_nutri">Comida</a><input type="search" placeholder="🔍Buscar" name="" id="searchMenuDia"></h5>
        <div id="caja">  
            <div><img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                <img id="infoIcon" src="/img/informacion.png" alt="">
                <input type="checkbox" name="checkmark" id="checkmark">
            </div>
            <div><img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                <img id="infoIcon" src="/img/informacion.png" alt="">
                <input type="checkbox" name="checkmark" id="checkmark">
            </div>
            <div><img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                <img id="infoIcon" src="/img/informacion.png" alt="">
                <input type="checkbox" name="checkmark" id="checkmark">
            </div>
            <h2 onclick=""><img id="slider" src="/img/flecha-correcta.png" alt=""></h2>
            <span>
                Sandwich de manzana y granola
            </span>
            <span>
                Sandwich de manzana y granola
            </span>
            <span>
                Sandwich de manzana y granola
            </span>
        </div>
        <h5 id="menuDiah5"><a href="receta_categoria_nutri">Merienda</a><input type="search" placeholder="🔍Buscar" name="" id="searchMenuDia"></h5>        
        <div id="caja">      
            <div><img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                <img id="infoIcon" src="/img/informacion.png" alt="">
                <input type="checkbox" name="checkmark" id="checkmark">
            </div>
            <div><img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                <img id="infoIcon" src="/img/informacion.png" alt="">
                <input type="checkbox" name="checkmark" id="checkmark">
            </div>
            <div><img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                <img id="infoIcon" src="/img/informacion.png" alt="">
                <input type="checkbox" name="checkmark" id="checkmark">
            </div>
            <h2 onclick=""><img id="slider" src="/img/flecha-correcta.png" alt=""></h2>
            <span>
                Sandwich de manzana y granola
            </span>
            <span>
                Sandwich de manzana y granola
            </span>
            <span>
                Sandwich de manzana y granola
            </span>
        </div>
        <h5 id="menuDiah5"><a href="receta_categoria_nutri">Cena</a><input type="search" placeholder="🔍Buscar" name="" id="searchMenuDia"></h5>
        <div id="caja">      
            <div><img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                <img id="infoIcon" src="/img/informacion.png" alt="">
                <input type="checkbox" name="checkmark" id="checkmark">
            </div>
            <div><img id="imgNombreComidas" src="/img/desayuno1.jpg" alt="">
                <img id="infoIcon" src="/img/informacion.png" alt="">
                <input type="checkbox" name="checkmark" id="checkmark">
            </div>
            <div><img id="imgNombreComidas" src="public/img/desayuno1.jpg" alt="">
                <img id="infoIcon" src="/img/informacion.png" alt="">
                <input type="checkbox" name="checkmark" id="checkmark">
            </div>
            <h2 onclick=""><img id="slider" src="/img/flecha-correcta.png" alt=""></h2>
            <span>
                Sandwich de manzana y granola
            </span>
            <span>
                Sandwich de manzana y granola
            </span>
            <span>
                Sandwich de manzana y granola
            </span> 
        </div>    
    </div>
    
    <script src="../js/app.js"></script>
</body>
</html>