<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
   
    <link rel="stylesheet" href="css/style.css"/>
    <title>Registro</title>
</head>
<body>
        <div class="login-box-registro">
            <h1>Registro</h1>
            
            <form method="post" action="registrares.php" >
             
              
                    <input type="text" class="nombre1" placeholder="Ingresa tu primer nombre" name="nombre1"  required autofocus>            

              
                    <input type="text"  class="nombre2" placeholder="Ingresa tu segundo nombre" name="nombre2">
                
                 
                    <input type="text"  class="apellido1"placeholder="Ingresa tu primer apellido" name="apellido1"  required autofocus>

                   
                    <input type="text"  class="apellido2" placeholder="Ingresa tu segundo apellido" name="apellido2">

                   
                    <input type="text" class="documento" placeholder="Ingresa tu documento" name="documentoes"  required autofocus>
                    
                    <input type="date" class="documento"   placeholder="Fecha Nacimiento" name="fecha_nacimiento"  required autofocus
                        value="2009-07-22"
                        min="1990-04-01" max="2030-12-12" >

                   
                    <select  class="sexo" name="sexo" placeholder="Sexo"  required autofocus> 
                        <option >Sexo</option> 
                         <option value="M">masculino</option> 
                          <option value="F" >femenino</option>
                            <option value="O">otro</option>
                              </select>  

                    <input type="text" class="documento" placeholder="Ingresa tu barrio" name="barrio"  required autofocus>                             

                    <input type="text"class="celular" placeholder="Ingresa numero  celular" name="celular"  required autofocus> 

                 
                    <input type="text"class="correo" placeholder="Nombre Acudiente " name="acudiente"  required autofocus>    
                    

                    <input type="tex"class="contraseña" placeholder="Celular Acudiente" name="celular_acudiente"  required autofocus>                       

    
                     <input type="submit"  class="boton" value="registrar">

                <p><a class="link" href="principal.php"><i class="fas fa-arrow-left"></i><-Atras</a></p>
            </div>
        </form>
    
    
          </form>
        </div>
        
    </body>

</html>