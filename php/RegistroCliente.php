<?php 

if(isset($_POST["registrar"])){

	$nombre = $_POST["nombre"];
	$appat = $_POST["appat"];
	$apmat = $_POST["apmat"];
	$numero = $_POST["numero"];
	$correo = $_POST["correo"];
	$usu = $_POST["nomU"];
	$password = $_POST["pass"];
	$nombreine		=$_FILES['ine']['name'];
	$guardadoine	=$_FILES['ine']['tmp_name'];
	$nombrelic		=$_FILES['lic']['name'];
	$guardadolic	=$_FILES['lic']['tmp_name'];
	$salt = '34aaA9823$';
	$pass = hash('sha256', $salt . $password);

	/*validar si existe el usuario*/
	include("conexion.php");
	$sentenciaSQL ="select usuario from usuario where usuario='".$usu."'";
	$r = mysqli_query($mysqli, $sentenciaSQL);
	if ($cdr =  mysqli_fetch_assoc($r)) {
		$existe = $cdr["usuario"];
		echo "<script>alert ('El nombre de usuario ".$usu." ya existe, por favor elige otro'); location.href='../index.php'; </script>";
	}else{ 
		include("conexion.php");
		$sentenciaSQL ="select usuario from usuario where correo='".$correo."'";
		$r = mysqli_query($mysqli, $sentenciaSQL);
		if ($cdr =  mysqli_fetch_assoc($r)) {
			$existeC = $cdr["usuario"];
			echo "<script>alert ('El Correo ".$correo." ya esta registrado con otra cuenta, por favor elige otro'); location.href='../index.php'; </script>";
		}else{ 

			/* Inicio Cargar archivo, validad si existen las carpetas y si no es asi con mkdir las crea*/
			if(!file_exists('../Archivo_Ine')){
				mkdir('../Archivo_Ine',0777,true);
		//S la carpeta ya existe guarda el archivo
				if(file_exists('Archivo_Ine')){
					if(move_uploaded_file($guardadoine, '../Archivo_Ine/'.$nombreine)){
				//echo "Archivo guardado con exito";
					}else{
				//echo "Archivo no se pudo guardar";
					}
				}
			}else{
				if(move_uploaded_file($guardadoine, '../Archivo_Ine/'.$nombreine)){
				//echo "Archivo guardado con exito";
				}else{
				//echo "Archivo no se pudo guardar";
				}
			}

			if(!file_exists('../Archivo_Lic')){
				mkdir('../Archivo_Lic',0777,true);
				if(file_exists('Archivo_Lic')){
					if(move_uploaded_file($guardadolic, '../Archivo_Lic/'.$nombrelic)){
				//echo "Archivo guardado con exito";
					}else{
				//echo "Archivo no se pudo guardar";
					}
				}
			}else{
				if(move_uploaded_file($guardadolic, '../Archivo_Lic/'.$nombrelic)){
				//echo "Archivo guardado con exito";
				}else{
				//echo "Archivo no se pudo guardar";
				}
			}


			include("conexion.php");
			$senteciaSQL = "call G_registrarCliente('".$usu."','".$pass."','".$correo."',".$numero.",'".$nombre."','".$appat."','".$apmat."','".$nombreine."','".$nombrelic."')";
			$result = mysqli_query($mysqli, $senteciaSQL);
			
			echo "<script>alert ('Registro Exitoso'); location.href='../index.php'; </script>";
		}

	}

}



?>