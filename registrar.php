<?php

include('con_db.php');

if (isset($_POST['enviar'])) {
    if (strlen($_POST['Cedula']) >= 1 && strlen($_POST['Nombre']) >= 1 && strlen($_POST['Apellido']) >= 1 && strlen($_POST['Correo']) >= 1 && strlen($_POST['Direccion']) >= 1 && strlen($_POST['Telefono']) >= 1 && strlen($_POST['Contraseña']) >= 1 ) {
	    $Ced= ($_POST['Cedula']);
	    $Nom = ($_POST['Nombre']);
	    $Ape = ($_POST['Apellido']); 
        $Corr = ($_POST['Correo']);  
        $Dir = ($_POST['Direccion']);  
        $Tel = ($_POST['Telefono']);  
        $Con = ($_POST['Contraseña']); 
	    $consulta = "INSERT INTO user(Cedula, Nombre, Apellido, Correo, Dirrecion, Telefono, Contraseña) VALUES ('$Ced','$Nom','$Ape','$Corr','$Dir','$Tel','$Con')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>