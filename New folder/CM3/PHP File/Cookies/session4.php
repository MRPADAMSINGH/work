<?php
/*
session_start();
*/
?>

<?php
/*
// remove all session variables
session_unset();
echo "Session unset successfully";
*/
?>



<?php
session_start();
?>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
echo "Session destroy successfully";
?>
