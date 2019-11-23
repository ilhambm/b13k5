<?php
function pairSocks($input){
 $array_new = array_count_values($input);
  $array2 = array();
  foreach($array_new as $key=>$val){
          if($val >1){
              $array2[] = $key;
          }
  }
  $pasangan = count($array2);
  echo $pasangan . " pair";
}

$array1 = array(5,13,7,5,9,20,9,5,14);
pairSocks($array1);


?>