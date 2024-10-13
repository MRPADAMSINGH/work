<?php
//create cookies ----------------------
    
echo "Welcome to Noida";
    setcookie("user", "Ankita", time()+60, "/");
  
    
//for delete cookies
/*
echo "Cookies delete";

setcookie("user", "Ankita", time()-60, "/");
*/


?>