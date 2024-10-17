<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_SERVER["REQUEST_METHOD"]=="POST"){
$serverName = "localhost";
$username = "root"; // Username Name
$pass = "";
$dbName = "registration"; // Databases Name

$conn = mysqli_connect($serverName, $username, $pass, $dbName);
if($conn == false){
die("Error". mysqli_connect_error());
}
else{
$fullName = $_POST["full_name"];
$email_id = $_POST["email"];
$password = $_POST["password"];
$mess = $_POST["message"];
$sql = "INSERT INTO `login` (`Full_Name`, `Email_Address`, `Pass_word`, `Mess_age`) VALUES ('$fullName', '$email_id', '$password', '$mess');";
$result = mysqli_query($conn, $sql);
if($result){
echo "record added";
}else{
echo "some issues";
}


mysqli_close($conn);
}
}
?>