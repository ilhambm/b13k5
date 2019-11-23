<?php
  function arkademi($input){
  if(is_numeric($input)){
	  for($i=1;$i<=$input;$i++){
		  if($i% 3 ==0){
				  echo "Arka, ";
		  }else if($i % 7 ==0){
				  echo "Demy, ";
		  }else{
				  echo $i . ", ";
		  }
		}
	}else{
		echo "Input harus angka";
	}
}

arkademi("21");
  
  
?>