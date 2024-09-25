<?php 
  include_once './includes/header.php'; 
?>

<?php

  $estudiante = [

    'name' => 'juan',
    'edad' => 35,
    
  ];

  echo '<pre>';

  var_dump($estudiante);

  echo '</pre>';
  
  echo $estudiante ['name'] . " ". $estudiante['edad']



?>