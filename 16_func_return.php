<?php 
  include_once './includes/header.php'; 
?>


<?php

  function calcular_total( $cantidad ){

    return $cantidad * 1.16;

  }


  echo calcular_total(200);


?> 