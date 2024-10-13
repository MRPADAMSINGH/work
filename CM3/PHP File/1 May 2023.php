<?php
    /*function funcWel(){
        echo "Welcome Here";
    }
    funcWel();*/


    /**
     * Summary of sayHello
     * @param mixed $name
     * @return void
     */
    /* function sayHello($name,$salary){
        echo "hello $name . your salary is $salary <br/>";
    }
    sayHello("Raj", 10000);
    sayHello("Monika", 5000);


    


    function add(...$numbers){
        $sum=0;
        foreach($numbers as $n){
            $sum+=$n;
        }
        return $sum;
    }
    echo add(1,2,3,4,5);
    

    //Write a PHP script to pass multiarguments in function.

    function familyName($fname, $age, $place){
        echo "$fname , Born in $place and $fname age is $age. <br>";
    }
    familyName("Raja","22","Mumbai");
    familyName("Priyanka","21","Delhi");
   

    //factorial using with function
    

       function factNum(){
        $num = 5;
        $factorial = 1;

        for ($i = 1; $i <= $num; $i++) {
            $factorial *= $i;
           
            }

            echo "The factorial of $num is $factorial";
       }
       factNum();

 */

 //Multidimensional Arrays

      
        $cars=array(
            array("BMW",22,18),
            array("Honda",12,8),
            array("Land Rover",19,15)
   );
   echo $cars[0][0].": In stock:" .$cars[0][1].",Sold:".$cars[0][2].".<br>";
   echo $cars[1][0].": In stock:" .$cars[1][1].",Sold:".$cars[1][2].".<br>";
   echo $cars[2][0].": In stock:" .$cars[2][1].",Sold:".$cars[2][2].".<br>";
   
     
      

?>