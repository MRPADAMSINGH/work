<?php

//Addition of two number--------------------------------------------
	/*
    class Addition {
        public function add($num1, $num2) {
          return $num1 + $num2;
        }
      }
      
      $calculator = new Addition();
      $result = $calculator->add(20, 19);
      echo $result; 
    */
    

    //Factorial of two number-----------------------------------------

    
    class factorial {
        public function factNum(){
            $num = 10;
            $factorial = 1;
    
            for ($i = 1; $i <= $num; $i++) {
                $factorial *= $i;
               
                }
    
                echo "The factorial of $num is $factorial";
           }
        
    }
    $factorialobj= new factorial();
    $result = $factorialobj->factNum();
    

?>
