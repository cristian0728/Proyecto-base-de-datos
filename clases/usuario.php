<?php
class usuario
{
    private $nombre1;
    private $nombre2;
    private $apellido1;
    private $apellido2;
    private $documento;
    private $sexo;
    private $celular;
    private $correo;
	private $clave;

    function setnombre1($nombre1){
		$this->nombre1=$nombre1;
	}
	function getnombre1(){
		return $this->nombre1;
    }
    function setnombre2($nombre2){
		$this->nombre2=$nombre2;
	}
	function getnombre2(){
		return $this->nombre2;
    }
    function setapellido1($apellido1){
		$this->apellido1=$apellido1;
	}
	function getapellido1(){
		return $this->apellido1;
    }
    function setapellido2($apellido2){
		$this->apellido2=$apellido2;
	}
	function getapellido2(){
		return $this->apellido2;
    }
    function setdocumento($documento){
		$this->documento=$documento;
	}
	function getdocumento(){
		return $this->documento;
    }
    function setsexo($sexo){
		$this->sexo=$sexo;
	}
	function getsexo(){
		return $this->sexo;
    }
    function setcelular($celular){
		$this->celular=$celular;
	}
	function getcelular(){
		return $this->celular;
    }
    function setcorreo($correo){
		$this->correo=$correo;
	}
	function getcorreo(){
		return $this->correo;
    }
    function setclave($clave){
		$this->clave=$clave;
	}
	function getclave(){
		return $this->clave;
	}
}
?>