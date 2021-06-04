<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Actualizar</title>
</head>
<body>
        <div class="login-box-registro">
            <h1>Actualizar</h1>
            <?php
                    require_once('clases/conexion.php');
                    require_once('clases/crud.php');
                    
                    $conexion=new conexion();
                    $crud=new crud($conexion);
                    $estudiante=new estudiante();
                    $estudiante->setdocumentoes($_POST['documentoes']);
                    $res=$crud->seleccionarpersona($estudiante);
                    $nombre1='';
                    $nombre2='';
                    $apellido1='';
                    $apellido2='';
                    $documentoes='';
                    $fecha_nacimiento='';
                    $sexo='';
                    $barrio='';
                    $celular='';
                    $acudiente='';
                    $celular_acudiente='';                    
                    if(count($res)){
                        $estudiante=$res[0];
                        $nombre1=$estudiante->getnombre1();
		                    $nombre2=$estudiante->getnombre2();
		                    $apellido1=$estudiante->getapellido1();
		                    $apellido2=$estudiante->getapellido2();
		                    $documentoes=$estudiante->getdocumentoes();
		                    $fecha_nacimiento=$estudiante->getfecha_nacimiento();
		                    $sexo=$estudiante->getsexo();
		                    $barrio=$estudiante->getbarrio();
		                    $celular=$estudiante->getcelular();
		                    $acudiente=$estudiante->getacudiente();
		                    $celular_acudiente=$estudiante->getcelular_acudiente();
		                    

                        
                    }

                    ?>
            
            <form method="post" action="modificares.php" >
             
              
                    <input type="text" class="nombre1" placeholder="Ingresa tu primer nombre" name="nombre1" value="<?php echo $nombre1;?>" required autofocus>            

              
                    <input type="text"  class="nombre2" placeholder="Ingresa tu segundo nombre" name="nombre2" value="<?php echo $nombre2;?>" >
                
                 
                    <input type="text"  class="apellido1"placeholder="Ingresa tu primer apellido" name="apellido1" value="<?php echo $apellido1;?>"  required autofocus>

                   
                    <input type="text"  class="apellido2" placeholder="Ingresa tu segundo apellido" name="apellido2" value="<?php echo $apellido2;?>" >

                   
                     <input type="text" class="documento" placeholder="Ingresa tu documento" name="documentoes" value="<?php echo $documentoes;?>"  required autofocus>
                    
                    

                   
                   

                    <input type="text" class="documento" placeholder="Ingresa tu barrio" name="barrio" value="<?php echo $barrio;?>"   required autofocus>                             

                    <input type="text"class="celular" placeholder="Ingresa numero  celular" name="celular" value="<?php echo $celular;?>"   required autofocus> 

                 
                    <input type="text"class="correo" placeholder="Nombre Acudiente " name="acudiente" value="<?php echo $acudiente;?>"   required autofocus>    
                    

                    <input type="tex"class="contraseña" placeholder="Celular Acudiente" name="celular_acudiente" value="<?php echo $celular_acudiente;?>"  required autofocus>                       

    
                     <input type="submit"  class="boton" value="Actualizar">

                <p><a class="link" href="consultaestudiante.php"><i class="fas fa-arrow-left"></i><- Atras</a></p>
                </form>
           
            </div>
        
    
    
        
        
        
    </body>

</html>