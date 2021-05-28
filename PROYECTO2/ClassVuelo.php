<?php
//Creamos clase sencilla para los vuelos
class Vuelo
{
    //Propiedades
    //Se trata de una clase de paso,
    //es decir, solo servirá como una clase contenedora
    //necesitamos que las propiedades sean públicas
    public $id;
    public $origin;
    public $destination;
    public $duration;
    
    //Constructor
    public function __construct(string $id, string $origin, string $destination, string $duration)
    {
        $this->id = $id;
        $this->origin = $origin;
        $this->destination = $destination;
        $this->duration = $duration;
    }
    //No necesitamos getters ni setters
}
?>

