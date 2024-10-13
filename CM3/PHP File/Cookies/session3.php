<?php
// Start the session
session_start();
?>

<?php
if(isset($_SESSION["favcolor"])){


echo "Session set successfully color is:  ".$_SESSION["favcolor"];

}else{
echo "No Session set";
}
?>