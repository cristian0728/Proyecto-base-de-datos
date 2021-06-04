<?php
class estudiante
{
    private $nombre1;
    private $nombre2;
    private $apellido1;
    private $apellido2;
    private $documentoes;
    private $fecha_nacimiento;
    private $sexo;
    private $barrio;
    private $celular;
    private $acudiente;
    private $celular_acudiente;
    
	

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
    function setdocumentoes($documentoes){
		$this->documentoes=$documentoes;
	}
	function getdocumentoes(){
		return $this->documentoes;
    }
     function setfecha_nacimiento($fecha_nacimiento){
		$this->fecha_nacimiento=$fecha_nacimiento;
	}
	function getfecha_nacimiento(){
		return $this->fecha_nacimiento;
    }
    function setsexo($sexo){
		$this->sexo=$sexo;
	}
	function getsexo(){
		return $this->sexo;
    }
    function setbarrio($barrio){
		$this->barrio=$barrio;
	}
	function getbarrio(){
		return $this->barrio;
    }
    function setcelular($celular){
		$this->celular=$celular;
	}
	function getcelular(){
		return $this->celular;
    }
    function setacudiente($acudiente){
		$this->acudiente=$acudiente;
	}
	function getacudiente(){
		return $this->acudiente;
    }
    function setcelular_acudiente($celular_acudiente){
		$this->celular_acudiente=$celular_acudiente;
	}
	function getcelular_acudiente(){
		return $this->celular_acudiente;
    }
    

}
?>