
<?php

include_once "Viaje.php";
include_once "Pasajero.php";
include_once "ResponsableV.php";

//Crear instancia de la clase Viaje
$viaje = new Viaje("V001", "Bariloche", 45);

//Menu de opciones
while (true) {

    echo "\n**Opciones:**\n";
    echo "1. Cargar información del viaje\n";
    echo "2. Modificar datos del viaje\n";
    echo "3. Ver información del viaje\n";
    echo "4. Salir\n";

    $opcion = readline("Ingrese la opción deseada: ");

}

    switch ($opcion) {
        case 1:
            //Cargar información del viaje
            $destino = readline("Ingrese el destino del viaje: ");
            $cantMaxPasajeros = readline("Ingrese la cantidad máxima de pasajeros: ");
            $viaje->setDestino($destino);
            $viaje->setCantMaxPasajeros($cant);    
            break;

        case 2:

            break;


        case 3:

            break;

            
        case 4: 
        
            break;        
    }    
        
?>