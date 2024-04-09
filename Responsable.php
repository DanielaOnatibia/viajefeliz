
<?php

class ResponsableV{

    private $nroEmpleado;
    private $nroLicencia;
    private $nombre;
    private $apellido;

    public function __construct($nroEmpleado, $nroLicencia, $nombre, $apellido)
    {
        $this->nroEmpleado=$nroEmpleado;
        $this->nroLicencia=$nroLicencia;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
    }
// acceso numero de empleado
    public function getNroEmpleado(){
        return $this->nroEmpleado;
    }
    public function setNroEmpleado($nroEmpleado){
        $this->nroEmpleado = $nroEmpleado;
    }
// acceso al numero de licencia
    public function getNroLicencia(){
        return $this->nroLicencia;
    }
    public function setNroLicencia($nroLicencia){
        $this->nroLicencia = $nroLicencia;
    }
// acceso a nombre
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
// acceso a apellido
    public function getApellido(){
        return $this->apellido;
    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
// muestra en pantalla
    public function __toString()
    {
        return 
        "Nombre= ". $this->getNombre(). "\n".
        "Apellido= ". $this->getApellido(). "\n". 
        "Numero Empleado= ". $this->getNroEmpleado(). "\n".
        "Numero Licencia: ". $this->getNroLicencia(). "\n";
    }
}
?>

<?php 
 ?>

