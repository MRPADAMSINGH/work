<html>
	<head>
		<title>PHP on 25  April 2023</title>
	</head>
	<style>
		body{
			background-color: lightblue;
			color: black;
			
		}
        h3{
            color: green;
            text-decoration: underline red;
        }
		p{
            color: red;
            margin-top: 0px;
            margin-bottom: -7px;
        }
	</style>

	<body>

<?php
    //         echo "<h3>Odd and Even</h3>";
    // for($i=1; $i<=10; $i++){
    //     if($i%2 === 0){
    //         echo "$i is Even Numbaer. <br>";
    //     }else{
    //         echo "$i is Odd Number. <br>";
    //     }
    // };


    echo "<h3>Area of Circle</h3>";
    
    
    $i=0;
    do{

        
        $i++;
        $p=3.14;
        $r=$i*$i;
        $A= $p*$r;
        echo "When r=$i then Area of Circle is: <p>$A</p> <br>";
        
    }while($i<10);

    // $i=0;
    // while($i<10){

       
    //     $i++;
    //     $p=3.14;
    //     $r=$i*$i;
    //     $A= $p*$r;
    //     echo "When r=$i then Area of Circle is: <p>$A</p> <br>";
        
    // };

    echo "<h3>Area of Square</h3>";

    $i=0;
    do{

       
        $i++;
        $a=$i*$i;
        echo "When r=$i then Area of Square is: <p>$a</p> <br>";
        
    }while($i<10);

    echo "<h3>Area of Square</h3>";

    $i=0;
    while($i<10){

       
        $i++;
        $a=$i*$i;
        echo "When r=$i then Area of Square is: <p>$a</p> <br>";
        
    };

    echo "<h3>Area of Rectangular</h3>";
    // $A=$a;
    // $B=$b;
    // $C=$A*$B;
    // for($a=1; $a<=10; $a++){
    //     echo "1st";
        
        
    // };
    // for($b=1; $b<=10; $b++){
    //     echo "when A=$a and B=$b then Area of Rectangular is: <p>$C</p> ";
    // };

    $a=0;
    $b=5;
    do{
        $a++; $b++; 
        $A= $a*$b;
        echo "when A=$a and B=$b then Area of Rectangular is: <p>$A</p> <br>";
        
    }while($a<10);while($b<10);


    echo "<h3>Sum of Digits</h3>";
    $a=0;
    $b=5;
    $c=2;
    do{
        $a++; $b++; $c++; 
        $A= $a+$b+$c;
        echo "when A=$a B=$b and C=$c then Sum of Digits is: <p>$A</p> <br>";
        
    }while($a<10);while($b<10);while($c<10);

    echo "<h3>Largest of three Numbers</h3>";
    $i=5;
        if($i<3){
            echo "$i is less then 3<br>";
        };
        
        if($i>3){
            echo "$i is Larger then 3<br>";
        };
    
    

        echo "<h3>Factorial of number</h3>";
        $num = 5;
        $factorial = 1;

        for ($i = 1; $i <= $num; $i++) {
            $factorial *= $i;
           
            }

            echo "The factorial of $num is $factorial";

    
            echo "<h3>Fibonacci series</h3>";
            $num1 = 0;
            $num2 = 1;

            echo $num1 . ", " . $num2 . ", ";

            for ($i = 2; $i < 10; $i++) {
            $num3 = $num1 + $num2;
            echo $num3 . ", ";
            $num1 = $num2;
            $num2 = $num3;
            };



            echo "<h3>Sum of Digits</h3>";
            $a=0;
            $b=5;
           
            do{
                $a++; $b++;
                $A= $a+$b;
                echo "when A=$a and B=$b then Sum of Digits is: <p>$A</p> <br>";
                
            }while($a<10);while($b<10);




            echo "<h3>Prime Number</h3>";
            $n = 50;
          
            for ($i = 2; $i <= $n; $i++) {
                $is_prime = true;
              
                for ($j = 2; $j < $i; $j++) {
                    if ($i % $j == 0) {
                        $is_prime = false;
                        break;
                    }
                }

                if ($is_prime) {
                    echo $i . " ";
                }
            };
            
            
            echo "<h3>Check whether the given number is prime or not</h3>";
            $a=705;
            for($i=2; $i<$a; $i++){
                if($a % $i == 0){
                    echo "$a is not a Prime Number";
                }else{
                    echo "$a is a Prime Number";
                }
                break;
            };
            

?>

</body>
</html>