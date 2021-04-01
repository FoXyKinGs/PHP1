<?php 

function segitiga($param){
  for($i = $param; $i >= 1; $i--){
    for($j = 1; $j <= $i; $j++){
      echo $j;
    }
  echo "\n";
  }
}

segitiga(5);

?>