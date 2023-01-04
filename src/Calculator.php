<?php 
//class Calculator{
    // public function Add($a,$b){
    //      return $a+$b;
    // }
   
      // public function fact($n){

        // this function not read parameter that pass through it 

      //   if($n=1 or $n=0) {
      //         return 1; 
      //      }

      //   elseif($n>1){
      //        return 5*4*3*2*1;
      //   }
        
      //   else{
      //      return "Null";
      //   }

      //************************ */
      // second way 
      //********************* */
         //   if(is_int($n) && $n>=0){
         //    $f=1;
         //     for($i = 2 ; $i <= $n ; $i++){
         //       $f *=$i;
         //     }
         //     return $f;
         //   }else{
         //    return null;
         //   }
         //}
     

         function fact($n){
             
            if($n<>1){
               $f=$n*fact($n-1);
               return $f;
            }else{
               return 1;
            }
         }
    

    
    



?>