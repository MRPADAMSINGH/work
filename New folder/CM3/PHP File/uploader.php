<?php

$target_path = "p:/";
$target_path = $target_path.basename($_FILES['filetoupload']['name']);

if(move_uploaded_file($_FILES['filetoupload']['tmp_name'],$target_path)){
    echo "File uploaded successfully";

}else{
    echo "Sorry, file not uploaded, please try again!";
}


?>