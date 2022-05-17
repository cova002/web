<?php
session_start();
$servername = "localhost";
$database = "crud";
$username = "root";
$password = "";
// Create connection
$con = mysqli_connect($servername, $username, $password, $database);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Conectado a la base de datos";


?>