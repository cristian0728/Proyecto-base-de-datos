<?php

require_once('clases/conexion.php');
require_once('clases/crud.php');
require_once('clases/usuario.php');

//Obtenemos las variables 
$nombre1= $_POST['nombre1'];
$nombre2= $_POST['nombre2'];
$apellido1= $_POST['apellido1'];
$apellido2= $_POST['apellido2'];
$documento= $_POST['documento'];
$celular=$_POST['celular'];    
$correo= $_POST['correo'];
$sexo= $_POST['sexo'];
$clave= $_POST['clave'];



$conexion=new conexion();
$crud = new crud($conexion);
$usuario = new usuario();
$usuario->setnombre1($nombre1);
$usuario->setnombre2($nombre2);
$usuario->setapellido1($apellido1);
$usuario->setapellido2($apellido2);
$usuario->setdocumento($documento);
$usuario->setcelular($celular);
$usuario->setcorreo($correo);
$usuario->setsexo($sexo);
$usuario->setclave($clave);
$res=$crud->insertarPersona($usuario);

if(!$res){
    header('location:index.php');
}else{
    header('location:404.php');

}

?>