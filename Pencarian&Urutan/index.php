<?php
    function prima($n){
  
        $counter = 0; 
        for($j=1;$j<=$n;$j++){ 
            
              if($n % $j==0){ 
                  
                    $counter++;
              }
        }
      
      if($counter==2){
           
             print $n." adalah bilangan prima <br/>";
      } else{

             print $n." bukan bilangan prima <br/>";
      }

} 

prima(8);
?>