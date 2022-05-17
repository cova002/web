<?php  
	include("conexion.php");
	$isdn=$_POST["isdn"];
	$titulo = $_POST["titulo"];
	$editorial = $_POST["editorial"];
	$insertar = "INSERT INTO libros (isdn, titulo, editorial) VALUES ('$isdn', '$titulo', '$editorial')";

	 if (!$result = mysqli_query($con, $insertar)) {
    exit(mysqli_error($con));
 }

  $_SESSION['message'] = 'Registro guardado correctamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');
?>