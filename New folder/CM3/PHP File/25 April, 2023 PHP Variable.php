<html>
	<head>
		<title>PHP on 25  April 2023</title>
	</head>
	<style>
		body{
			background-color: lightblue;
			color: black;
			
		}
		
	</style>

	<body>
		<h2>
			Constant and Normal variable.
		</h2>
		<?php
			

		echo "Constant Variable<br>";
			define ("A", 5);
			echo A," Constant Variable<br><br>";

		$a="Normal variable<br><br>";
		echo "$a";

			$a=25;
			$b=31;

			echo "$a and $b Normal variable<br>";
			
			$a=85;
			$b=30;
			$c=$a+$b;
			echo "a=85, b=30, c=a+b <br>";
			echo "1. Addition $c <br><br>";
			

			
			$c=$a-$b;
			echo "a=85, b=30, c=a-b <br>";
			echo "2. Subtract $c <br><br>";


			$c=$a*$b;
			echo "a=85, b=30, c=a*b <br>";
			echo "3. Muntiply $c<br><br>";

			echo "Know we are changing variables value <br><br>";

			$a=2;
			$b=20;
			$c=$b/$a;
			echo "a=2, b=20, c=b/a <br>";
			echo "4. divide $c <br><br>";

			$c=$b%$a;
			echo "a=2, b=20, c=b%a <br>";
			echo "5. Modulus $c <br><br>";




			
		?>
	
	</body>
</html>