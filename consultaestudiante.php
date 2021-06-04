<!DOCTYPE html>
<html lang="es">
<head>
    <title>mostrar datos</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
</head>
<body>
<header>
		<nav class="navegacion">
			<ul class="menu">
				<li><a href="principal.php">Inicio</a></li>
				<li><a href="#">Estudiante</a>
					<ul class="submenu">
						<li><a href="agregarestudiante.php">Matricular Estudiante</a></li>
						<li><a href="consultaestudiante.php">Consultar Matricula</a></li>
            <li><a href="consultaestudiante.php">Modificar Matricula</a></li>
            <li><a href="consultaestudiante.php">Eliminar Matricula</a></li>          
					</ul>
        </li>
        <li><a href="reporte.php">Generar Reporte</a></li>
        <li><a href="salir.php">Cerrar Sesion</a></li>       
			</ul>
		</nav>
	</header>


<table>
<div >
			<thead>
				<tr>
                    <th>NOMBRE COMPLETO</th>                                                          
                     <th>DOCUMENTO</th>
                     <th>fecha_nacimiento</th>
                     <th>sexo</th>
                     <th>barrio</th>
                     <th>celular</th>
                     <th>acudiente</th>
                     <th>celular_acudiente</th>                    
                     <th>MODIFICAR</th>
                     <th>ELIMINAR</th>
				</tr>
			</thead>      
       <?php 
         require_once('clases/conexion.php');
         require_once('clases/crud.php');         
         $conexion=new conexion();
         $crud=new crud($conexion);
         $res=$crud->listarPersona();
         if(count($res)){
             for($i=0;$i<count($res);$i++){
                 $estudiante=$res[$i];
                 
             echo 
             "<tr>
             <td>".$estudiante->getnombre1()."</td>
                        
             <td>".$estudiante->getdocumentoes()."</td>  
             <td>".$estudiante->getfecha_nacimiento()."</td>
             <td>".$estudiante->getsexo()."</td> 
             <td>".$estudiante->getbarrio()."</td>               
             <td>".$estudiante->getcelular()."</td>            
             <td>".$estudiante->getacudiente()."</td>
             <td>".$estudiante->getcelular_acudiente()."</td>
            
             </td><td>
             <form class='user' action='actualizarestudiante.php' method='post'>
                                <div class='form-group'>
                                  <input type='text' name='documentoes' value=".$estudiante->getdocumentoes()." style='display:none '>
                                </div>
                                  <button type='submit' class='boton'>Modificar</button>
                              </form>
                              </td><td>
                              <form class='user' action='eliminares.php' method='post'>
                                <div class='form-group'>
                                  <input type='text' name='documentoes' value=".$estudiante->getdocumentoes()." style='display:none'>
                                </div>
                                  <button type='submit' class='boton'>Eliminar</button>
                              </form>
                            </td></tr>";	
             
             } 

         }else{
          echo "<tr><td colspan='3'>NO hay registros</td></tr>";
         }

         ?>
		</div>
	</table>

</body>
</html>