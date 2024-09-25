<?php 
  include_once './includes/header.php'; 
?>
<?php

function saludar( $nombre ){

  echo "Hola ".$nombre;

}

saludar('juan');

echo "<br>";

function sumar( $num1 = 0, $num2 = 0 ){
  echo $num1 + $num2 . "<br>";
}

sumar();

?>