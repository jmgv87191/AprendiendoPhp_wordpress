<?php 
  include_once './includes/header.php'; 
?>


<?php

  for ($i=0; $i < 100; $i++) { 

    if ($i === 10) {
      echo "el numero es diez <br>";
      continue;
    }
    
    echo $i. "<br>";

  }


?>