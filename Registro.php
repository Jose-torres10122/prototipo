<!Doctype html> 
<html lang="es">
<head> 
    <meta charset="utf-8"> 
    <title>
     Iniciar sesion
    </title> 
    <link rel="stylesheet" type="text/css" href="estilos.css"> 
    
    <link rel="stylesheet" type="text/css"  href="style.css">
    
    <link rel ="stylesheet" type="text/css" href="session.css">
    <meta name="viewport"  content=" width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> 
    <script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="menu.js"></script>
    </head> 
    <body>
        <header>
                
            <div class="logotype">
            <img src="logotype.png"> 
            </div>
                <div class="menu_bar"> 
                <a href="#" class="bt-menu"> <span class="icon-menu"></span>Menu</a>
                </div>
            
            <nav>
            <ul> 
                    <li><a href="index.html"><span class="icon-home"></span>Home</a></li>
                    <li><a href="#"><span class="icon-price-tags"></span>Productos</a></li> 
                    <li><a href="#"><span class="icon-list2"></span> Categoria de productos</a></li>
                    <li><a href="session.php"><span class="icon-enter"></span>Iniciar Sesion</a></li>
             </ul>
         </nav>
        </header> 
       
        <section>
         
            
        
        <form  class="sesion"  action="registrar.php" method="post"> 
            
            <div class="form"> 
                <h3>Registro</h3>
            </div> 
        
            <div class="entradas">
               
                <label class="p"for="Cedula">Cedula:</label> 
                <input  class="p"type="text" name="Cedula" placeholder="Cedula" >
                
                <label class="p"for="Nombre">Nombre:</label> 
                <input  class="p"type="text" name="Nombre" placeholder="Nombre" > 
               
                <label class="p"for="Apellido">Apellido:</label> 
                <input  class="p"type="text" name="Apellido" placeholder="Apellido" > 
                
                <label class="N" for="Correo">Correo:</label> 
                <input  class="N"type="email" name="Correo" placeholder="Correo" > 
                
                
                <label class="p"for="Direccion">Direccion:</label> 
                <input  class="p"type="Text" name="Direccion" placeholder="Direccion" > 
               
                <label class="p"for="Telefono">Telefono:</label> 
                <input  class="p"type="text" name="Telefono" placeholder="Telefono" > 
                
                <label class="p"for="Contraseña">Contraseña:</label> 
                <input  class="p"type="password" name="Contraseña" placeholder="Password" >  
                
        </div> 
            
            <input class="btn" type="submit" name="enviar"  >

            </form>
          <?php 
            include("registrar.php");
            ?>
        </section>
    </body>
</html>