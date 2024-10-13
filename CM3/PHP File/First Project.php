<html>
	<head>
		<title>PHP on 25  April 2023</title>
	</head>
	<style>
		body{
			background-color: lightpink;
			color: black;
			
		}
	</style>

	<body>
		<h2>
			Constant and Normal variable.
		</h2>
		<?php
			// $a=10;
			// echo $a;

			

			// define ("A",50,false);
			// // define ("A",15);
			// echo A."<br>";

		echo "Constant variable<br>";
			define ("A", 5);
			// define ("A", 15);
			
			echo A."<br><br><br>";

		$a="Normal variable<br><br>";
		echo "$a";
			$a=85;
			$b=30;
			$c=$a+$b;
			echo "a=85, b=30, c=a+b <br>";
			echo "1. Addition of a and b = $c <br><br>";
			
			$c=$a-$b;
			echo "a=85, b=30, c=a-b <br>";
			echo "2. Subtract of a and b = $c <br><br>";


			$c=$a*$b;
			echo "a=85, b=30, c=a*b <br>";
			echo "3. Muntiply of a and b = $c<br><br>";

			echo "Know we are changing variables value <br><br>";

			$a=2;
			$b=20;
			$c=$b/$a;
			echo "a=2, b=20, c=b/a <br>";
			echo "4. b divide by a = $c <br><br>";

			$c=$b%$a;
			echo "a=2, b=20, c=b%a <br>";
			echo "5. b divide by a = $c <br><br>";




			
		?>
	
	</body>
</html>