<?php 
//Activity-------------3
//phpinfo()


//Activity ------------4
/* echo "Hello This is Your World<br>";
echo "How are you"; */


//Activity ------------5

/* <?php
echo $_POST["name"];
?> */

//activity -----------6

/*
<?php
$a=100;
$b=50;
$c=20;
echo "
<table border=1 cellspacing=0 cellpading=0>
                            <!— column which spans 2 -->
<tr>
 <th colspan= 2> Marks Sheet </th>
</tr>

<tr>
<td>
    <font color=blue>Marks of Mr. A is</td>
    <td>$a</font></td>
</tr>
<tr>
    <td><font color=blue>Marks of Mr. B is</td>
    <td>$b</font></td>
</tr>
<tr>
    <td><font color=blue>Marks of Mr. C is</td>
    <td>$c</font></td>
</tr>


</table>";
?>
*/


//Activity-------------7
/*
<?php
// nl2br is used for newlines.
echo "Hello <br>";
echo "How are You<br>";
$file = basename($_SERVER['PHP_SELF']);
$no_of_lines = count(file($file));
echo "There are $no_of_lines lines in $file"."\n";
?>
*/



//Activity ------------8
/*
$a = 40;  
$b = $a > 45 ? 20 : 5;  
print ("<h2>Value of b is: " . $b . "</h2>");  



function test_number($num) {
    print ($num > 30) ? "greater than 30" : (($num > 20) ? "greater than 20" : (($num > 10) ? "greater than 10" : "less then 10"));
 }test_number("20");
 

 //Activity ----------9

 echo "Write a script which will display the string"


 //Activity ----------10

 $color=array("white","black","blue","red","green");
 foreach($color as $c){
    echo "$c,<br> ";
 }
 echo "After sort<br><br>";
 sort($color);
 foreach($color as $y){
    echo "$y<br>";
 }
 

//Activity ------------11
  $color=array("1","-2","-3","0","3");
  foreach($color as $c){
     echo "$c,<br> ";
  }
  echo "After sort<br><br>";
  sort($color);
  foreach($color as $y){
     echo "$y<br>";
  }
 


  //Activity ------------13
	function factNum(){
        $num = 10;
        $factorial = 1;

        for ($i = 1; $i <= $num; $i++) {
            $factorial *= $i;
           
            }

            echo "The factorial of $num is $factorial";
       }
       factNum();



//Activity ---------------12
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74,
62, 62, 65, 64, 68, 73, 75, 79, 73);

min($temperatures);

max($temperatures);

count($temperatures);

array_sum($temperatures);


print "Min value of temperature is: ".$a= min($temperatures);
echo "<br>";
print "Max value of temperature is: ".$b= max($temperatures);
echo "<br>";
print "Count of temperature is: ".$c= count($temperatures);
echo "<br>";
print "Sum of temperature: ".$d= array_sum($temperatures);
echo "<br>";
$avg=$d/$c;
echo "The Avrage of Temperature is: ".$avg. ".<br>";

echo "List of five lowest temperatures : ";
for($i=0; $i<5; $i++)
{
    sort($temperatures);
echo " $temperatures[$i] ";
}
echo "<br>";

echo "List of five highest temperatures : ";
for($i = $c-5; $i <= $c-1; $i++)
{
echo "$temperatures[$i], ";
}



//Activity -------------14;

$n=5;
for($i=1; $i<=$n;$i++){
   for($j=1;$j<=$i;$j++){
      echo "*";
   }
   echo "<br>";
}
for($i=$n; $i>=1;$i--){
   for($j=1;$j<=$i;$j++){
      echo "*";
   }
   echo "<br>";
}

//Activity ------------15

/*
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

*/

//Activity -------------16;

function factNum(){
   $num = 8;
   $factorial = 1;

   for ($i = 1; $i <= $num; $i++) {
       $factorial *= $i;
      
       }

       echo "The factorial of $num is $factorial";
  }
  factNum();





    
          //Activity -----------17;
      echo "<h3>Check whether the given number is prime or not</h3>";
            $a=70;
            for($i=2; $i<$a; $i++){
                if($a % $i == 0){
                    echo "$a is not a Prime Number";
                }else{
                    echo "$a is a Prime Number";
                }
                break;
            };



//Activity --------------18

function Reverse($str){ 
      return strrev($str);
   }
   $str = "national skills training institute"; 
     echo "Original String :<br>"; 
   echo $str."<br>";
   echo "After reverse : <br>"; 
   echo Reverse($str);


//Activity -------------19

 
   function palindrome(){
      $num=546456;
      $rev= strrev($num);
   if($num==$rev){
      echo "$num is a Palindrome.";

   }else{
      echo "$num is not a Palindrome.";
   }
   }palindrome();


   

   //Activity --------------21

class MyCalculater {
   private $value1;
   private $value2;
   public function __construct($value1, $value2)
   {
    $this->value1=$value1;
    $this->value2=$value2;  
   }
   public function add(){
      return $this->value1 + $this->value2;
   }
}
$mycal = new MyCalculater("12", "5");
echo $mycal->add();
?>