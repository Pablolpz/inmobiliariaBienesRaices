<?php
//Este arcivo debe ser eliminado una vez que entra an produccion

//Importar la conexion
require 'includes/app.php';
$db = conectarDB();

//Crear un email y password
$email = "correo@correo.com";
$password = "12345";

//Hashear el password
$passwordHash = password_hash($password, PASSWORD_BCRYPT);

//Query para crear el usuario
$query = "INSERT INTO usuarios (email, password) VALUES ('${email}', '${passwordHash}');";

echo $query;

//Agregar a la base de datos
mysqli_query($db, $query);