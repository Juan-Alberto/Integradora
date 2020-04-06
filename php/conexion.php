
<?php 

    $mysqli=new mysqli('localhost','root','','easycrane');

    if ($mysqli->connect_error) {

      echo "Error al conectarse con My SQL debido al error".$mysqli->connect_error;

    }

 ?>
