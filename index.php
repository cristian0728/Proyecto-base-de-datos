<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-box">
        <h1>Iniciar Sesion</h1>
        
        <form method="post" action="loginl.php" >        
          
          <input type="text" class="correo"  placeholder="Ingresar Usuario" name="correo"  required autofocus>        
         
           <input type="password" class="contraseña" placeholder="Ingresar Contraseña" name="clave"   required autofocus>
           
            <input type="submit" class="boton"  value="Iniciar">           

            <p>¿No tienes una cuenta?<a class="link" href="registro.php"> Registrate</a></p>

      </form>
    </div>
    
</body>
</html>