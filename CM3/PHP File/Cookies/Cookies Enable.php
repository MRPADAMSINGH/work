<?php
setcookie("user", "Priya", time() + 3600, "/");
?>

<?php
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
} else {
  echo "Cookies are disabled.";
}
?>