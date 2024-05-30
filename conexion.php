<?php
$conex = mysqli_connect("localhost", "root", "", "Register");

if (!$conex) {
    die("Conexión fallida: " . mysqli_connect_error());
} else {
    //echo "Conexión exitosa";
}
?>