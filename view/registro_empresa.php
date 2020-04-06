<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Grúas Magni &middot; Inicio</title>

    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/P_registro_empresa.css">

    <link rel="icon" href="favicon.ico">

    <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../js/P_validacion.js"></script>

</head>

<body>

    <header id="header-recuperar">
        <?php

            include('header.registraE.php');

        ?>
    </header>

    <!-- Inicio Formulario -->
    <div class="p-principal-section">
            <form action="reg_emp.php" class="formulario" onsubmit="return validateForm();" method="post">
                <H3 class="p-title-operacion">Registro de Empresas</H3><br>
                <?php if(!empty($errores)): ?>
                    <?php echo $errores; ?>
                <?php endif; ?>
                <input type="text" placeholder="Nombre*" class="p-usuario" id="name" name="nombre">
                <div class="notificacion" id="mensaje2"></div>

                <input type="text" placeholder="Calle*" class="p-usuario" id="street" name="calle">
                <div class="notificacion" id="mensaje3"></div>

                <input type="text" placeholder="Numero externo*" class="p-usuario" id="numext" name="numext">
                <div class="notificacion" id="mensaje4"></div>

                 <input type="text" placeholder="Colonia*" class="p-usuario" id="colonia" name="colonia">
                <div class="notificacion" id="mensaje5"></div>

                 <input type="text" placeholder="Municipio*" class="p-usuario" id="muni" name="muni">
                <div class="notificacion" id="mensaje6"></div>

                 <input type="text" placeholder="Código postal*" class="p-usuario" id="postcode" name="postcode">
                <div class="notificacion" id="mensaje7"></div>

                <input type="text" placeholder="N&uacute;mero Telef&oacute;nico*" maxlength="10" class="p-usuario" id="phone" name="phone">
                <div class="notificacion" id="mensaje1"></div>

                <input type="email" placeholder="Correo Electr&oacute;nico*" class="p-usuario" id="email" name="email">
                 <div class="notificacion" id="mensaje8"></div>
                <input type="text" placeholder="Elige un nombre de usuario*" class="p-usuario" id="user" name="usuario">
                 <div class="notificacion" id="mensaje9"></div>
                <input type="password" placeholder="Contraseña*" class="p-contrasena" id="pass" name="pass">
                 <div class="notificacion" id="mensaje10"></div>
                <input type="password" placeholder="Confirmar Contraseña*" class="p-contrasena" id="pass2" name="pass2">
                 <div class="notificacion" id="mensaje11"></div>
                <p class="p-ine"><input type="Checkbox" id='terminos'>Al registrarte, aceptas nuestros terminos y condiciones.</p><br>

                <p><input type="submit" value="Reg&iacute;strate" class="p-enviar"></p>

            </form>
    </div>
    <!-- Termino Formulario -->

    <footer>
        <?php

        include('footer.php');

        ?>
    </footer>
</body>
</html>
