<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grúas Magni &middot; Password</title>

    <link rel="icon" href="../favicon.ico">

    <link rel="stylesheet" href="../css/recuperar.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" type="text/css" href="../icons/icomoon/style.css">

    <script type="text/javascript" src="../js/jquery-3.4.1.min.js" ></script>
    <script type="text/javascript" src="../js/JQuery.js" ></script>

</head>
<body>
    
    <header id="header-recuperar">
        <?php

            include('header.recuperar.php');

        ?>
    </header>


    <section id="section-recuperar">

        <div class="principal-section">

            <h3 class="title-operacion">Recuperar contraseña</h3>

            <p class="texto-recuperar">Olvidaste tu contraseña, tranquil@<br>
                Para poder acceder a tu cuenta, solo siga los siguientes pasos</p>

            <p class="texto-recuperar pasos">1.- Seleccione el tipo de usuario que es:</p>

            <span class="type-user">Usuario</span>
            <input type="radio" class="opciones" name="selecionar-user" id="Usuario">

            <span class="type-user">Empresa</span>
            <input type="radio" class="opciones" name="selecionar-user" id="Empresa">

        
        <form action="../php/recuperarUsuario.php" class="recuperar-usuario" method="POST">
        <div class="type-select" id="div-usuario">
            <p class="texto-recuperar pasos">2.- Llene de campos solicitados:</p>

            <input type="text" class="usuario" placeholder="Correo electronico" name="usuarioCorreo">

            <input type="submit" class="enviar">
        
        </div>
        </form>

        <form action="../php/recuperarUsuario.php" class="recuperar-usuario" method="POST">
        <div class="type-select" id="div-empresa">

        <p class="texto-recuperar pasos">2.- Llene de campos solicitados:</p>

            <input type="text" class="usuario" placeholder="Nombre de la empresa">

            <input type="text" class="usuario" placeholder="Correo electronico" name="usuarioCorreo">

            <input type="submit" class="enviar">
                
        </div>
        </form>

        </div>
    </section>

    <footer>
        <?php

        include('footer.php');

        ?>
    </footer>

</body>
</html>