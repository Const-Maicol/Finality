<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_store";

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
    die('Error al conectar a la base de datos: ' . mysqli_connect_error());
}

?>