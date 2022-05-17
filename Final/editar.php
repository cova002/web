<?php
include("conexion.php");
$id = $_GET["id"];
$isdn='';
$titulo = '';
$editorial= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM libros WHERE id=$id";
  $result = mysqli_query($con, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $isdn = $row['isdn'];
    $titulo = $row['titulo'];
    $editorial = $row['editorial'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $isdn = $_POST['isdn'];
  $titulo= $_POST['titulo'];
  $editorial = $_POST['editorial'];

  $query = "UPDATE libros set isdn = '$isdn', titulo = '$titulo', editorial = '$editorial'  WHERE id=$id";
  mysqli_query($con, $query);
 $_SESSION['message'] = 'Registro editado';

  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
      	 <div class="form-group">
          <input name="isdn" type="text" class="form-control" value="<?php echo $isdn; ?>" placeholder="ISDN">
        </div>
        <div class="form-group">
          <input name="titulo" type="text" class="form-control" value="<?php echo $titulo; ?>" placeholder="Titulo">
        </div>
        <div class="form-group">
        <input name="editorial" type="text" class="form-control" value="<?php echo $editorial; ?>" placeholder="Editorial">
        </div>
        <button class="btn-success" name="update">
          Editar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
