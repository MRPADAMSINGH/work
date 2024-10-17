<?php
// Start the session
session_start();
?>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.<br>";
?>


<?php
/*
if(isset($_SESSION["favcolor"])){


echo "Session set successfully color is:  ".$_SESSION["favcolor"];

}else{
echo "No Session set";
}
*/
?>
