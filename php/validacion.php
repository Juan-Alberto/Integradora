<?php
    require('conexion.php');

    sleep(1);

    $usu=$_POST['userlog'];

    $pass=$_POST['passlog'];

    $salt = '34aaA9823$';
    $password = hash('sha256', $salt.$pass);

    $usuarios=$mysqli->query("Select usuario, typeUser
                            From usuario Where usuario='".$usu."'
                          AND contrasena='".$password."'");

    if ($usuarios->num_rows > 0):

      $datos= $usuarios->fetch_assoc();
      echo json_encode(array('error'=>false,'tipo'=>$datos['typeUser']));

    else:

      echo json_encode(array('error'=>true));

    endif;

    $mysqli->close();
 ?>