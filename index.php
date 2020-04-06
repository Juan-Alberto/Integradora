<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <!--Titulo de la pagina-->
    <title>Easy Crane &middot; Inicio</title>

    <!--icon de la pagina-->
    <link rel="icon" href="favicon.ico">

    <!--Estilos de css-->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="icons/icomoon/style.css">
    <link rel="stylesheet" href="css/RegistroU.css">

    <!--JQuery y JavaScript-->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script src="js/login.js" type="text/javascript"></script>
    <script src="js/notificaciones.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/main.js"></script>    
    <script type="text/javascript" src="js/Gvalidacion.js"></script>

</head>
<body>
    <!-- INCLUDE -> HEADER -->
    <header>
        <?php 
            include('view/header.php');
        ?>
    </header>

    <div class="error"> 
        <span class="error-alert">El usuario no existe Porfavor verifique sus datos</span>
    </div>

    <!--<span class="ir-arriba "></span>-->

    <section id="intro">
            <div class="izquierda">
                <h1 class="animated flipInY">&#9472; BIENVENIDO A EASY CRANE &#9472;</h1>
                <p class="servis">&#187; SERVICIO DE COTIZACIÓN DE ARRASTRE Y TRASLADO &#171;</p>
                <p class="mensaje animated shake">Contamos con servicio las 24 horas del día, 
                    los 365 días del año. Si necesitas un servicio de grúa, nosotros somos tu 
                    mejor solución. Contando con la colaboración de las mejores empresas de grúas 
                    en el estado de México, Easy Crane presente siempre en tu auxilio víal.</p>
            </div>
    </section> <!--SECTION IMG AND INFORMATION-->

    <form action="" id="formularioL">
    <div class="in-sesion"> <!-- INICIO DE SESIÓN -->
        <p class="text-info">¡A H O R A!</p>
        <p class="text-info">Puedes inicar sesión de una manera más rapida y sencilla.</p>
        <p class="text-info">Los campos marcados con un <span class="rojo">*</span>son obligatorios</p>
       
        <div class="opciones-in">
            <span class="rojo">*</span><input type="text" class="user" pattern="[A-Za-z0-9_-]{1,15}" placeholder="Usuario" id="Iuser" name="userlog">
            <div class="notificacion-user" id="mensajes1">Ingresa tu usuario</div>
            
            <span class="rojo">*</span><input type="password" class="password" pattern="[A-Za-z0-9_-]{1,15}" placeholder="Contraseña" id="Ipass" name="passlog">
            <div class="notificacion-pass " id="mensajes2">Ingresa tu contraseña</div>
            
            <input type="submit" value="Iniciar sesión" class="entrar" id="btnEntrar">
        </div>
        <a href="view/recuperar.php" class="remember">¿Olvidaste tu contraseña?</a>

    </div>
    </form>


    <!--SESIÓN 2-->
    <section class="in-sesion2">
        <div class="ate-clien">
            <img class="imagenes-s1" src="img/service-1.png">
            <h3 class="title-serv">Asistencia telefónica</h3>
            <p class="publicidad">Expertos dispuestos a ayudarte</p>
            <p class="publicidad">al instante en cualquier problema</p>
        </div>

        <div class="type-serv">
            <img class="imagenes-s1" src="img/service-2.png">
            <h3 class="title-serv">Traslados seguros</h3>
            <p class="publicidad">Tenemos los mejores serivicios</p>
            <p class="publicidad">mayor seguridad de tu vehículo</p>
        </div>

        <div class="plans">
            <img class="imagenes-s1" src="img/service-3.png">
            <h3 class="title-serv">Formas de pago</h3>
            <p class="publicidad">Puedes pagar en efectivo ó pago</p>
            <p class="publicidad">mediante tarjeta de crédito</p>
        </div>
    </section>


    <!-- SESION DE NOSOTROS -->
    <section class="info-nosotros" id="nos">
        <div class="nosotros-info">

            <h2 class="title-nosotros"> <font>&#8212;</font><font style="color:#D4D8DB;">&#8212;</font> 
            Nosotros <font>&#8212;</font><font style="color:#D4D8DB;">&#8212;</font></h2>
            <p class="nosotros-text">
            Easy Crane nace de la necesidad de servicios de arrastre y traslado eficientes y seguros.Contamos con</p>
            <p class="nosotros-text">
            la participación de las mejores empresas del Estado de México."Grúas Magni", fundadora del sitio, en </p> 
            <p class="nosotros-text">
            colaboración con la secretaría de movilidad del estado de méxico,se encargan de auditar a cada empresa</p> 
            <p class="nosotros-text">
            para garantizar así la seguridad de un servicio de calidad en el que tú y tu automovil son la prioridad</p> 
            <p class="nosotros-text">
            ¿Qué esperas para ser parte de la familia de Easy Crane? Somos tu auxilio víal 24/7. ¡Te esperamos!</p> 

            <h3 class="proceso">¿Cúal es el proceso?</h3>
            <div class="contenido-pasos">

                <div class="pasos-proceso"><span class="icon-display icon-proceso"></span>
                <p class="pasos-text">Registrate y sé parte de nosotros</p></div>

                <div class="pasos-proceso"><span class="icon-bubbles icon-proceso"></span>
                <p class="pasos-text">Llámanos o envíanos un mensaje o correo</p></div>

                <div class="pasos-proceso"><span class="icon-wrench icon-proceso"></span>
                <p class="pasos-text">Puedes venir a nuestra sucursal</p></div>

            </div>
        </div>
    </section>


    <!--SESIÓN 3-->
    <section class="in-sesion3" id="asis">
    <div class="plans3">
            <h1 class="nosotros3 horarios-t"><font>&#9474;</font>Asistencia</h1>
            <p class="info-text3">Lunes-Viernes</p>
            <p class="info-text3" style="color:#0072C5;">09:00AM &#x2508; 06:00PM</p>
            <p class="info-text3">Sabado-Domingo</p>
            <p class="info-text3" style="color:#0072C5;">09:00AM &#x2508; 02:00PM</p>
        </div>
        <div class="plans3">
            <h1 class="nosotros3 servicios-t"><font>&#9474;</font>Servicios</h1>
            <p class="info-text3">&#x2713; Arrastre</p>
            <p class="info-text3">&#x2713; Traslado</p>
            <p class="info-text3">&#x2713; Cotizaciónes</p>
            <p class="info-text3">&#x2713; Monitoreo</p>
            <p class="info-text3">&#x2713; Auxilio víal</p>
        </div>
        <div class="plans3 cotizacion-t">
            <h1 class="nosotros3"><font>&#9474;</font>Realiza tu cotización</h1>
            <form>
                <input id="inputform" type="text" class="p-cotizacion" placeholder="Origen*">

                <input id="inputform" type="text" class="p-cotizacion" placeholder="Destino*">

                <input id="button-form" type="submit" value="Cotizar" class="p-cotizar">

           </form>
        </div>
    </section>


 <!--SESIÓN 4-->
    <section class="in-sesion2 ubi-registar" id="registro">
        <div class="ate-clien">
        <h1 class="nosotros3 horarios-t"><font>&#9474;</font>Registrate y se parte de nosotros</h1>
        <div class="g-principal-section">
            <!-- Inicio Formulario-->
           <form  action="php/RegistroCliente.php" class="formulario" onsubmit="return Gform()" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Nombre*" class="g-usuario" id="nombre" name="nombre">
            <div class="notificacion" id="mensaje2"></div>

            <input type="text" placeholder="Apellido Paterno*" class="g-usuario" id="appat" name="appat">
            <div class="notificacion" id="mensaje3"></div>

            <input type="text" placeholder="Apellido Materno" class="g-usuario" id="apmat" name="apmat">
            <div class="notificacion" id="mensaje4"></div>


            <input type="text" placeholder="N&uacute;mero Telef&oacute;nico*" maxlength="10" class="g-usuario" id="numero" name="numero">
            <div class="notificacion" id="mensaje1"></div>

            <input type="email" placeholder="Correo Electr&oacute;nico*" class="g-usuario" id="correo" name="correo">
            <div class="notificacion" id="mensaje7"></div>

            <p class="g-ine">INE<label class="g-nota">&nbsp(solo archivos .pdf)*</label> <br><input type="file"  accept=".pdf" class="g-archivoP" onchange="control(this)" id="ine" name="ine"></p><br>
            <div class="notificacion" id="mensaje5"></div>

            <p class="g-lic">LICENCIA DE CONDUCIR<label class="g-nota">&nbsp(Solo archivos .pdf)*</label><br><input type="file" accept=".pdf" class="g-archivoP" onchange="control(this)" id="lic" name="lic"></p>
            <br>
            <div class="notificacion" id="mensaje8"></div>

            <input type="text" placeholder="Elige un nombre de usuario*" class="g-usuario" id="nomU" name="nomU">
            <div class="notificacion" id="mensaje9"></div>

            <input type="password" placeholder="Contraseña*" class="g-contrasena" id="pass" name="pass">
            <div id="error1"></div>

            <input type="password" placeholder="Confirmar Contraseña*" class="g-contrasena" id="confP">
            <div class="notificacion" id="error2"></div>


            <p class="g-ine"><input type="Checkbox" id="terminos">Al registrarte, aceptas nuestros terminos y condiciones.</p><br>
            <div class="notificacion" id="mensaje6"></div>


            <p><input type="submit" value="Reg&iacute;strate" class="g-enviar" name="registrar"></p>

            </form>
            </div>
        </div>
        
        <div class="plans">
                <h1 class="nosotros3 horarios-t"><font>&#9474;</font>Nuestra ubicación</h1>
                <iframe class="ubicacion" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.235966354081!2d-98.98259448561379!3d19.70257553709888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1924db880b35f%3A0x54481398f0553ef6!2sUniversidad%20Tecnol%C3%B3gica%20de%20Tec%C3%A1mac!5e0!3m2!1ses!2smx!4v1574628699818!5m2!1ses!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </section>



    <!-- CARRUSEL-EMPRESAS -->

    <section class="empresas" id="gal">
        <div class="cap1">
        <h2 class="title-nosotros"> <font>&#8212;</font><font style="color:#D4D8DB;">&#8212;</font> 
            Empresas Asociadas <font>&#8212;</font><font style="color:#D4D8DB;">&#8212;</font></h2>

            <div class="slideshow">
		<ul class="slider">
			<li>
				<img src="img/empresa1.jpg" alt="">
			</li>
			<li>
				<img src="img/empresa2.jpg" alt="">
			</li>
			<li>
				<img src="img/empresa3.jpg" alt="">
			</li>
			<li>
				<img src="img/empresa4.jpg" alt="">
            </li>
            <li>
				<img src="img/empresa5.jpg" alt="">
            </li>
            <li>
				<img src="img/empresa6.jpg" alt="">
            </li>
            <li>
				<img src="img/empresa7.jpg" alt="">
            </li>
            <li>
				<img src="img/empresa8.jpg" alt="">
			</li>
		</ul>

		<ol class="pagination">
		</ol>
            <p class="link-registro">Se parte de nosotros y registrate a <a href="view/registro_empresa.php" class="remember">Aqui</a> no esperes más </p>
        </div>
    </section>


    <!--JAVASCRIPT-->
    
    <script src="js/js.js"></script>


    <footer>
        <?php
            include('view/footer.php');
        ?>
    </footer>

</body>
</html>