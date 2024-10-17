<?php
/*
    echo(abs(3.5)."<br>");
    echo(abs(-3.5)."<br>");
    echo(abs(5)."<br>");
    echo(abs(-5)."<br>");


    echo(acos(0.35)."<br>");
    echo(acos(-0.35)."<br>");
    echo(acos(5)."<br>");
    echo(acos(0.75)."<br>");
    */
    $emp= array("Priyanka", "Ram", "Manisha", "Payal");
    echo "Employee Names<br>";
    print_r($emp);
    echo "<br>";
    unset($emp[1]);
    echo "Modified arrays:<br>";
    print_r($emp);

    

/*
     $salary= array(21632, 13515, 54652, 23155);
    //  $size=count($salary);
    //  $a=$salary;
    //  echo "The size of array is: $size.<br>";


     $a=sizeof($salary);
     echo "The size of array is : $a";
     */
?>