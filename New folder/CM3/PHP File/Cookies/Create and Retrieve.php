<?php

echo "Welcome to Mumbai<br>";
setcookie("user", "Padam Singh", time()+60, "/");

?>

<?php
if(isset($_COOKIE["user"])){


    echo "Cookies set successfully Welcome to Mumbai ".$_COOKIE["user"];

}else{
    echo "No Cookies set";
}
?>