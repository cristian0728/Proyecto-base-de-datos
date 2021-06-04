<?php

require_once('clases/conexion.php');
require_once('clases/crud.php');
require_once('clases/estudiante.php');



//Obtenemos las variables 
$nombre1= $_POST['nombre1'];
$nombre2= $_POST['nombre2'];
$apellido1= $_POST['apellido1'];
$apellido2= $_POST['apellido2'];
$documentoes= $_POST['documentoes'];
$fecha_nacimiento= $_POST['fecha_nacimiento'];
$sexo= $_POST['sexo'];
$barrio= $_POST['barrio'];
$celular=$_POST['celular'];
$acudiente= $_POST['acudiente'];
$celular_acudiente= $_POST['celular_acudiente'];

$conexion=new conexion();
$crud = new crud($conexion);
$estudiante = new estudiante();
$estudiante->setnombre1($nombre1);
$estudiante->setnombre2($nombre2);
$estudiante->setapellido1($apellido1);
$estudiante->setapellido2($apellido2);
$estudiante->setdocumentoes($documentoes);
$estudiante->setfecha_nacimiento($fecha_nacimiento);
$estudiante->setsexo($sexo);
$estudiante->setbarrio($barrio);
$estudiante->setcelular($celular);
$estudiante->setacudiente($acudiente);
$estudiante->setcelular_acudiente($celular_acudiente);
$res=$crud->insertarestudiante($estudiante);

if(!$res){
    header('location:principal.php');
}else{
    header('location:404.php');

}

?>