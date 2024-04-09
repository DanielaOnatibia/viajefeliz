<?php

class Pasajero{
    private $nombre;
    private $apellido;
    private $dni;
    private $telefono;
    
public function __construct($nombre,$apellido,$dni,$telefono)
{
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->dni = $dni;
    $this->telefono = $telefono;
} 
// acceso a nombre
public function getNombre (){
    return $this->nombre;
}
public function setNombre($newNombre){
    $this->nombre = $nombre;
}
// acceso a apellido
public function getApellido(){
    return $this->apellido;
}
public function setApellido($newApellido){
    $this->apellido = $apellido;
}
// acceso a dni
public function getDni(){
    return  $this->dni;
}
public function setDni($newDni){
    $this->dni = $dni;
}
// acceso a telefono
public function getTelefono(){
    return  $this->telefono;
}
public function setTelefono($newTelefono){
    $this->telefono = $telefono;
}


public function __toString()
   {
       $cadena= "\nLos datos del pasajero son: \nNombre: ".$this->getNombre().",\n Apellido: ".$this->getApellido().",\n Numero de Documento ".$this->getDni()."\ny Telefono\n".$this->getTelefono()."\n";
       return $cadena;
   }
}

?>