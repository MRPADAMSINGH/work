<?php
//No cookies set---------------------------------->>>
if(isset($_COOKIE["user"])){


    echo "Welcome to Noida".$_COOKIE["user"];

}else{
    echo "No Cookies set";
}
    // setcookie("user", "Ankita", time()+60, "/");
    




?>