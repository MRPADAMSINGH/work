<?php

echo "Welcome to Mumbai<br>";
setcookie("user", "Priyanka", time()+60, "/");

?>

<?php
if(isset($_COOKIE["user"])){


    echo "Cookies Modify successfully Welcome to Mumbai ".$_COOKIE["user"];

}else{
    echo "No Cookies set";
}
?>