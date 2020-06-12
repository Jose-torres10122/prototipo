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
                    <li><a href="#"><span class="icon-enter"></span>Iniciar Sesion</a></li>
             </ul>
         </nav>
        </header> 
       
        <section>
         
            
        
        <form  class="sesion" action="ingreso.php" method="post"> 
            
            <div class="form"> 
                <h3>Iniciar Sesion</h3>
            </div> 
        
            <div class="entradas">
                <label class="N" for="Correo">Correo:</label> 
                <input  class="N"type="email" name="correo" placeholder="Correo" > 
                
                <label class="p"for="Contraseña">Contraseña:</label> 
                <input  class="p"type="password" name="contrasena" placeholder="Password" > 
                
        </div> 
            
            <button class="btn" type="submit"><span class="icon-enter" name="ingresar "></span>Ingresar</button>
            <div class="Registro"><a href="Registro.php">¿No tienes cuenta ? </a></div>
            </form>
        
        </section>
    </body>
</html>