<?php 
  include_once './includes/header.php'; 
?>


<?php

  $frutas = ['manzana','pera'];

  echo "<pre>";

    var_dump($frutas);

  echo "</pre>";

  echo "//////////////////////////////////////////////////////////";

  array_push( $frutas, 'melon' );
  
  unset( $frutas[1] );

  echo "<pre>";

    var_dump( $frutas );

  echo "</pre>";

?>