<?php 
  include_once './includes/header.php'; 
?>


<?php



$estudiante = [
  'name' => 'juan',
  'edad' => 23
];



echo "<h1>  Hola" . $estudiante['name'] . "</h1>";

?>

<h1>  hola <?php echo $estudiante['name'] ?> </h1>