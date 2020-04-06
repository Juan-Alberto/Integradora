
<?php 

    require 'conexion.php';

    $usu=$_POST['userlog'];
    $pass=$_POST['passlog'];

    $salt = '34aaA9823$';
    $password = hash('sha256', $salt.$pass);
    echo $password;    


    $mensaje ="";

    $usuarios=mysqli_query($conn ,"SELECT*From usuario  Where usuario='".$usu."' AND contrasena='".$password."'");



	$row = $usuarios->fetch_array();


      if(mysqli_num_rows($usuarios) > 0){

		if($row['typeUser'] == 2){

           header("location: ../view/empresa/index.php");
            
		}else if ($row['typeUser'] == 1){
            header("location: ../view/usuario/index.php");
            
    	}else{
		    header('Location: ../index.php');
        }
    } else {
       header('Location: ../index.php');
    }

?>