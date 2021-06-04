<?php

//session_name('administrador');//session_name — Obtener y/o establecer el nombre de la sesión actual
session_start();//session_start — Iniciar una nueva sesión o reanudar la existente
ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);//error_reporting — Establece cuáles errores de PHP son notificados
$correo=$_POST["correo"];
$clave=$_POST["clave"];
if($correo and $clave){
    require_once('clases/usuario.php');
    require_once('clases/conexion.php');
    require_once('clases/crud.php');
    $conexion=new conexion();
    $crud=new crud($conexion);
    $usuario=new usuario();
    $usuario->setcorreo($correo);
    $usuario->setclave($clave);
   

    $res=$crud->consultarLogin($usuario);
    if(count($res)){
        $usuario=$res[0];
        $correo=$usuario->getcorreo();
        $clave=$usuario->getclave();
        
        header('location:principal.php');
       
    }else{
        header('location:index.php');
    }
    
    }
    
?>