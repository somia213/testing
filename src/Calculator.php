<?php 
class Calculator{
    // public function Add($a,$b){
    //      return $a+$b;
    // }
           
       public function fact($n){
        
        if($n=1 or $n=0) {
              return 1; 
           }

        elseif($n>1){
         $f= fact($n-1) * $n;           
          return $f;
        }
        
        else{
           return "Null";
        }
    }

    
    
}

?>