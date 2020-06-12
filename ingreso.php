<?php

include('con_db.php');

$Correo = $_POST["correo"]; 
$Contraseña = $_POST["contrasena"];

$query = mysqli_query($conex,"SELECT * FROM user WHERE Correo = '".$Correo ."'and Contraseña = '".$Contraseña ."' "); 
$nr = mysqli_num_rows($query);  

if($nr == 1){
    //header("Location: session.php")
    echo "Bienvenido:" .$Correo;
} else if($nr == 0){
    echo "Error de contraseña o usuario";
}

?>