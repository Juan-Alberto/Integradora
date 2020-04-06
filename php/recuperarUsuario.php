
<?php

	require '../PHPMailer/PHPMailerAutoload.php'; //Este es parte de la libreria
    
    $correo = $_POST['usuarioCorreo'];


	$mail = new PHPMailer();
	
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';
	$mail->Host = 'smtp.gmail.com';
    $mail->Port = '587';
    
    //Cofiguración de PHPMailerAutoload NO SE MUEVE NADA
	
	$mail->Username = 'gruasmagni@gmail.com'; //Correo de gruas 
    $mail->Password = 'Alberto99@'; // Password de la cuenta
    
    //ESTE CORREO YA ESTA VALIDADO Y CONFIGURADO EN GMAIL.

	
	$mail->setFrom('gruasmagni@gmail.com', '¡Hola usuario!'); //DE QUIEN ES EL CORREO
	$mail->addAddress($correo, 'Receptor'); //PARA QUIEN VA EL CORREO
	
	
	$mail->Subject = 'Titulo de correo: PRUEBA'; //TITULO
    $mail->Body    = 'Ingresa el siguiente texto en tu correo EasyCrear1234'; //CONTENIDO
    
    //OJO: LO QUE ES "ADDADDRESS y SUBJECT Y BODY SE PUEDE HACER CON FORMULARIO DONDE SOLO SE VINCULA LOS INPUT"
	
	if($mail->send()) {

        header("Location: ../index.php");
        
		} else {

        header("Location: ../index.php");
        
    }
    
    //"ESTA VALIDACIÓN OUEDE QUITARSE Y SE OUEDE METER CON ALERTAS DE JQUERY"

?>