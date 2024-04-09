<?php
class Viaje {

    private $codigo;
    private $destino;
    private $cantMaxPasajeros;
    private $pasajeros;
    private $responsable;

    public function __construct($codigo, $destino, $cantMaxPasajeros) {
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->cantMaxPasajeros = $cantMaxPasajeros;
        $this->pasajeros = array();
        $this->responsable = null;
    }
// acceso al codigo
    public function getCodigo (){
        return $this->codigo;
    }
    public function setCodigo($newCodigo){
        $this->codigo = $codigo;
    }
// acceso a destino 
    public function getDestino(){
        return $this->destino;
    }
    public function setDestino(){
        $this->destino = $destino;
    }
// acceso a cantidad maxima de pasajeros
    public function 

    //Métodos para gestionar pasajeros
    public function agregarPasajero($pasajero) {
        if (!$this->estaPasajero($pasajero)) {
            $this->pasajeros[] = $pasajero;
        } else {
            echo "El pasajero ya se encuentra cargado en el viaje.\n";
        }
    }

    public function modificarPasajero($nombre, $apellido, $telefono) {
        foreach ($this->pasajeros as $pasajero) {
            if ($pasajero->getNombre() == $nombre && $pasajero->getApellido() == $apellido) {
                $pasajero->setTelefono($telefono);
                break;
            }
        }
    }

    public function estaPasajero($pasajero) {
        foreach ($this->pasajeros as $pasajeroExistente) {
            if ($pasajeroExistente->getNombre() == $pasajero->getNombre() && $pasajeroExistente->getApellido() == $pasajero->getApellido()) {
                return true;
            }
        }
        return false;
    }

    //Métodos para gestionar responsable
    public function setResponsable($responsable) {
        $this->responsable = $responsable;
    }

    //Métodos para obtener información
    public function getCodigo() {
        return $this->codigo;
    }

    public function getDestino() {
        return $this->destino;
    }

    public function getCantMaxPasajeros() {
        return $this->cantMaxPasajeros;
    }

    public function getPasajeros() {
        return $this->pasajeros;
    }

    public function getResponsable() {
        return $this->responsable;
    }

    //Mostrar información del viaje
    public function mostrarInformacion() {
        echo "**Información del viaje:**\n";
        echo "Código: " . $this->codigo . "\n";
        echo "Destino: " . $this->destino . "\n";
        echo "Cantidad máxima de pasajeros: " . $this->cantMaxPasajeros . "\n";

        echo "\n**Pasajeros:**\n";
        foreach ($this->pasajeros as $pasajero) {
            $pasajero->mostrarInformacion();
        }

        echo "\n**Responsable del viaje:**\n";
        $this->responsable->mostrarInformacion();
    }
}
?>