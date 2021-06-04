<?php
error_reporting(E_ALL); //error_reporting — Establece cuáles errores de PHP son notificados
ini_set('display_errors', '1');//ini_set — Establece el valor de una directiva de configuración

require_once('estudiante.php');
require_once('usuario.php');

/*La sentencia require_once es idéntica a require excepto que PHP verificará si el archivo
 ya ha sido incluido y si es así, no se incluye (require) de nuevo.*/
class crud{
	var $miConexion;
	function __construct($conexion){
		$this->miConexion=$conexion;
	}
	function consultarLogin($usuario){
	
		$lista=array(); //array — Crea un array
		$correo=$usuario->getcorreo();
		$clave=$usuario->getclave();
	     $sql="SELECT * FROM sad.usuario  
		      WHERE correo='$correo' 
			  and clave='$clave' ";
		$this->miConexion->consulta($sql);	
	
if($this->miConexion->cuentaFilas()>0){
while($row=$this->miConexion->extraerRegistros()){
	$usuario=new usuario();
	$usuario->setnombre1($row["nombre1"]);
	$usuario->setnombre2($row["nombre2"]);
	$usuario->setapellido1($row["apellido1"]);
	$usuario->setapellido2($row["apellido2"]);
	$usuario->setdocumento($row["documento"]);
	$usuario->setsexo($row["sexo"]);
	$usuario->setcelular($row["celular"]);
	$usuario->setcorreo($row["correo"]);
	$usuario->setclave($row["clave"]); 

    
    
	$lista[]=$usuario;
}
	}
	return $lista;

}
	function listarPersona(){
	
		$lista=array();
	     $sql="SELECT  CONCAT(nombre1||' '||nombre2||' '||apellido1||' '||apellido2) as nombre_completo,
		   documentoes, fecha_nacimiento,sexo,barrio,celular,acudiente,celular_acudiente from sad.estudiante";
		$this->miConexion->consulta($sql);	
	
if($this->miConexion->cuentaFilas()>0){
while($row=$this->miConexion->extraerRegistros()){
	$estudiante=new estudiante();
	$estudiante->setnombre1($row["nombre_completo"]);
	$estudiante->setdocumentoes($row["documentoes"]);
	$estudiante->setfecha_nacimiento($row["fecha_nacimiento"]);
	$estudiante->setsexo($row["sexo"]);
	$estudiante->setbarrio($row["barrio"]);
	$estudiante->setcelular($row["celular"]);
	$estudiante->setacudiente($row["acudiente"]);
	$estudiante->setcelular_acudiente($row["celular_acudiente"]); 
	
	
    
	$lista[]=$estudiante;
}
	}
	return $lista;

}

function seleccionarPersona($estudiante){
	$documentoes=$estudiante->getdocumentoes();
		$lista=array();
		
	     $sql="SELECT *from sad.estudiante WHERE documentoes='$documentoes'";
		$this->miConexion->consulta($sql);	
	
if($this->miConexion->cuentaFilas()>0){
while($row=$this->miConexion->extraerRegistros()){
	$estudiante=new estudiante();
	$estudiante->setnombre1($row["nombre1"]);
	$estudiante->setnombre2($row["nombre2"]);
	$estudiante->setapellido1($row["apellido1"]);
	$estudiante->setapellido2($row["apellido2"]);
	$estudiante->setdocumentoes($row["documentoes"]);
	$estudiante->setfecha_nacimiento($row["fecha_nacimiento"]);
	$estudiante->setsexo($row["sexo"]);
	$estudiante->setbarrio($row["barrio"]);
	$estudiante->setcelular($row["celular"]);
	$estudiante->setacudiente($row["acudiente"]);
	$estudiante->setcelular_acudiente($row["celular_acudiente"]); 
    
	$lista[]=$estudiante;
}
	}
	return $lista;

}


	function insertarPersona($usuario){
		$sql="INSERT INTO sad.usuario(nombre1,nombre2,apellido1,apellido2,documento,celular,correo,sexo,clave)
			  VALUES ('".$usuario->getnombre1()."','".$usuario->getnombre2()."','".$usuario->getapellido1()."'
			  ,'".$usuario->getapellido2()."','".$usuario->getdocumento()."','".$usuario->getcelular()."',
			  '".$usuario->getcorreo()."','".$usuario->getsexo()."','".$usuario->getclave()."')";
		$this->miConexion->consulta($sql);
		if($this->miConexion->filasAfectadas()){
				return true;
		}else {
			return false;
		}
	}
	function insertarestudiante($estudiante){
		$sql="INSERT INTO sad.estudiante(nombre1,nombre2,apellido1,apellido2,documentoes,fecha_nacimiento,sexo,barrio,celular,acudiente,celular_acudiente)
			  VALUES ('".$estudiante->getnombre1()."','".$estudiante->getnombre2()."','".$estudiante->getapellido1()."'
			  ,'".$estudiante->getapellido2()."','".$estudiante->getdocumentoes()."','".$estudiante->getfecha_nacimiento()."',
			  '".$estudiante->getsexo()."','".$estudiante->getbarrio()."','".$estudiante->getcelular()."','".$estudiante->getacudiente()."','".$estudiante->getcelular_acudiente()."')";
		$this->miConexion->consulta($sql);
		if($this->miConexion->filasAfectadas()){
				return true;
		}else {
			return false;
		}
	}
	function modificarPersona($estudiante){
        
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
		
        
	 $sql= "UPDATE  sad.estudiante SET nombre1 = '$nombre1' ,
	 nombre2 = '$nombre2',apellido1 = '$apellido1' ,
	 apellido2 = '$apellido2',barrio = '$barrio',celular = '$celular', acudiente = '$acudiente',
	  celular_acudiente = '$celular_acudiente' WHERE documentoes='$documentoes'";
		$this->miConexion->consulta($sql);
		if($this->miConexion->filasAfectadas()){
				return true;
		}else {
			return false;
		}
	}
	function eliminarPersona($estudiante){
		$documentoes=$estudiante->getdocumentoes();
		$sql="DELETE FROM sad.estudiante 
		      WHERE documentoes='$documentoes'";
		$this->miConexion->consulta($sql);
		if($this->miConexion->filasAfectadas()){
				return true;
		}else {
			return false;
		}
	}
		

}

?>