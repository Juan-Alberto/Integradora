<?php
	// Cargas la sesión
	session_start();

	session_unset();

	// Y luego cierras la sesión
	session_destroy();
	header("Location: ../index.php");
?>