<?php
include("conexion.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM libros WHERE id = $id";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query fallido.");
  }

  $_SESSION['message'] = 'Registro eliminado';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>