<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <script src="https://kit.fontawesome.com/711b725bdc.js"></script>
    <link rel="stylesheet" href="css/style.css"/>
    <title>Registro</title>
</head>
<body>
        <div class="login-box-registro">
            <h1>Registro</h1>
            
            <form method="post" action="registraru.php" >
             
              
                    <input type="text" class="nombre1" placeholder="Ingresa tu primer nombre" name="nombre1"  required autofocus>            

              
                    <input type="text"  class="nombre2" placeholder="Ingresa tu segundo nombre" name="nombre2">
                
                 
                    <input type="text"  class="apellido1"placeholder="Ingresa tu primer apellido" name="apellido1"  required autofocus>

                   
                    <input type="text"  class="apellido2" placeholder="Ingresa tu segundo apellido" name="apellido2">

                   
                    <input type="text" class="documento" placeholder="Ingresa tu documento" name="documento"  required autofocus>
                   
                    <select  class="sexo" name="sexo" placeholder="Sexo"  required autofocus> 
                        <option >Sexo</option> 
                         <option value="masculino">masculino</option> 
                          <option value="femenino" >femenino</option>
                            <option value="otro">otro</option>
                              </select>                               

                    <input type="text"class="celular" placeholder="Ingresa numero  celular" name="celular"  required autofocus> 

                 
                    <input type="text"class="correo" placeholder="Ingresa tu correo " name="correo"  required autofocus>    
                    

                    <input type="password"class="contraseña" placeholder="Ingresa tu contraseña" name="clave"  required autofocus>                       

    
                     <input type="submit" value="Registrarse" class="boton" value="registrar">

                <p><a class="link" href="index.php"><i class="fas fa-arrow-left"></i> Login</a></p>
            </div>
        </form>
    
    
          </form>
        </div>
        
    </body>

</html>