<?php
// Declaring number of lines we need in a triangle
$n = 5;
echo "n = " . $n . "<br>";
//Specifying from where we need to print
$count = 1;
for ($i = $n; $i > 0; $i--)
{
for ($j = $i; $j < $n + 1; $j++)
{
echo " ".$count." ";
$count++;
}
echo "<br>";
}
?>
