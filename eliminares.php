<?php
require_once('clases/conexion.php');
require_once('clases/crud.php');
$conexion=new conexion();
$crud=new crud($conexion);
$estudiante=new estudiante();
$estudiante->setdocumentoes($_POST['documentoes']);
$res=$crud->eliminarpersona($estudiante);
if(!$res){
header('location:consultaestudiante.php');
}else{
header('location:404.php');

}
?>