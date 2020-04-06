<?php 

//session_start();

///if(isset($_SESSION['usuario'])){

//header('Location: ../index.php');

//}

if($_SERVER['REQUEST_METHOD']=='POST'){

	$usuario = filter_var(strtolower($_POST['usuario']),FILTER_SANITIZE_STRING);
	$nombre = filter_var(strtolower($_POST['nombre']),FILTER_SANITIZE_STRING);
	$calle = $_POST['calle'];
	$numext = $_POST['numext'];
	$colonia = $_POST['colonia'];
	$muni = $_POST['muni'];
	$postcode = $_POST['postcode'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$salt = "34aaA9823$";
	$pass = hash('sha256',$salt.$pass);




	$errores='';
	if(empty($usuario) or empty($calle) or empty($numext) or empty($colonia) or empty($muni) or empty($postcode) or empty($phone) or empty($email) or empty($pass)){

		$errores .= 'Por favor rellena todos los datos correctamente';

	}else{
		
			

			//$datos = array("usuario" =>$usuario);
			//$statement = $conexion->prepare("CALL consultarUsuario(?)");
			//$statement->bind_param("s",$datos['usuario']);
			//$mysql->query($statement);
			//$consulta = mysqli_fetch_assoc();


	try {
		
$conn = new PDO("mysql:host=localhost;dbname=easycrane","root","");
$sql = "CALL consultarUsuario(:usuario)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':usuario',$usuario,PDO::PARAM_STR,100);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
   $stmt->setFetchMode(PDO::FETCH_ASSOC);
   $num= $stmt->rowCount();

    if($num>0){

    	$errores .= "El usuario ya existe";
    }else{


    	$conn2 = new PDO("mysql:host=localhost;dbname=easycrane","root","");
$reg = "CALL insertarEmpresa(?,?,?,?,?,?,?,?,?,?);";

$stmt2 = $conn2->prepare($reg);


$stmt2->bindParam("1",$usuario,PDO::PARAM_STR,100);
$stmt2->bindParam("2",$pass,PDO::PARAM_STR,100);
$stmt2->bindParam("3",$email,PDO::PARAM_STR,100);
$stmt2->bindParam("4",$phone,PDO::PARAM_STR,100);
$stmt2->bindParam("5",$nombre,PDO::PARAM_STR,100);
$stmt2->bindParam("6",$calle,PDO::PARAM_STR,100);
$stmt2->bindParam("7",$numext,PDO::PARAM_STR,100);
$stmt2->bindParam("8",$colonia,PDO::PARAM_STR,100);
$stmt2->bindParam("9",$muni,PDO::PARAM_STR,100);
$stmt2->bindParam("10",$postcode,PDO::PARAM_STR,100);

$stmt2->execute();

//echo '<script>alert("Registro exitoso"); window.history.go(-1); </script>';

header('Location: ../index.php');	

    }

		}catch(PDOException $e){
			echo "Error: ".$e->getMessage();
		}
				
	}
}

require 'registro_empresa.php';

 ?>