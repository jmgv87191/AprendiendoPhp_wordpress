<?php 
  include_once './includes/header.php'; 
?>

<?php

class Cliente {
    public $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function mostrarNombre(){
      echo "el nombre es".$this->nombre;
    }

}

$cliente = new Cliente("Juan");

$cliente->mostrarNombre();

?>