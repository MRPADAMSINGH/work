<html>
	<head>
		<title>PHP on 25  April 2023</title>
	</head>
	<style>
		body{
			background-color: lightblue;
			color: black;
            text-align: center;
			
		}
        h3{
            font-size: xx-large;
            text-shadow: 0px 0px 20px white;
            letter-spacing: 10px;
            text-decoration: underline red;
            
        }
        h5{
            color: black;
            font-size: larger;
            
        }
        h2{
            color: green;
            text-decoration: underline yellow;
        }
		
	</style>

	<body>
		<h3>
			Arithmetic Operator
		</h3>
		<?php
		
			echo "<h2>Addition</h2>";
			$a=10;
			$b=5;
			$c=$a+$b;
			echo "<h5>The Addition of Two variable is $c</h5>";
            
            echo "<h2>Subtract</h2>";
            $a=3;
			$b=12;
			$c=$a-$b;
			echo "<h5>Subtract of a=$a and b=$b is $c<h5>";

            $a=10;
			$b=5;
			$c=$a-$b;
			echo "<h5>Subtract of a=$a and b=$b is $c<h5>";

            echo "<h2>Multiply</h2>";
            $a=7;
			$b=11;
			$c=$a*$b;
			echo "<h5>Multiply of a=$a and b=$b is $c<h5>";

            echo "<h2>Division</h2>";
            $a=10;
			$b=4;
			$c=$a/$b;
			echo "<h5>Division of a=$a and b=$b is $c<h5>";

            echo "<h2>Modulus</h2>";
            $a=10;
			$b=4;
			$c=$a%$b;
			echo "<h5>Reminder of a=$a and b=$b is $c<h5>";
			
			

			



			
		?>
	
	</body>
</html>