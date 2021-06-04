<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


require_once('clases/conexion.php');
require_once('clases/crud.php');

//Obtenemos las variables 
$nombre1= $_POST['nombre1'];
$nombre2= $_POST['nombre2'];
$apellido1= $_POST['apellido1'];
$apellido2= $_POST['apellido2'];
$documentoes= $_POST['documentoes'];
$barrio= $_POST['barrio'];
$celular=$_POST['celular'];
$acudiente= $_POST['acudiente'];
$celular_acudiente= $_POST['celular_acudiente'];



$conexion=new conexion();
$crud = new crud($conexion);
$estudiante= new estudiante();
$estudiante->setnombre1($nombre1);
$estudiante->setnombre2($nombre2);
$estudiante->setapellido1($apellido1);
$estudiante->setapellido2($apellido2);
$estudiante->setdocumentoes($documentoes);
$estudiante->setbarrio($barrio);
$estudiante->setcelular($celular);
$estudiante->setacudiente($acudiente);
$estudiante->setcelular_acudiente($celular_acudiente);
$res=$crud->modificarPersona($estudiante);

if(!$res){
    header('location:Consultaestudiante.php');
}else{
    header('location:404.php');

}

?>