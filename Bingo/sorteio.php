<?php
  
  for ($i=0; $i < 75; $i++) {
    
    do {
      $sorteados[$i] = rand(1,99);
      $auxiliar = 1;
      
      for ($j = 0; ($j < $i) && ($auxiliar == 1); ++$j){
        if ($sorteados[$i] == $sorteados[$j]){
          $auxiliar = 0;
        }
      }
    
    } while ($auxiliar == 0);
  
  }
  echo json_encode($sorteados);
?>