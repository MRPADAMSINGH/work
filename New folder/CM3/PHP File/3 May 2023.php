<?php
    /*
    mkdir("images");
    mkdir("../data");
   */ 
  /*
//open,read and close------------------------------->>>>
    $dir=".";
    if(is_dir($dir)){
        if($d=opendir($dir)){
            while($file=readdir($d)){
                echo "filename: ".$file. "<br>";
            }
            closedir($d);
        }
    }

/*
//   echo getcwd();
chdir("./images");
echo getcwd();




$dir=getcwd();
echo "<pre>";
print_r(scandir($dir,1));
//here 1 is use for acending order and decending order.------------------->>>
echo "</pre>";

----------------------------------------

echo readfile("myfile.txt");

-----------------------------------------


$file=fopen("myfile.txt","r");
//here 10 is use for show at lest 10 letters.
//echo fread($file,10);
echo fread($file)



//This for copy file txt to another file----------------------------->>>>
$file="myfile.txt";
if(file_exists($file)){
    echo readfile("myfile.txt");
    copy($file,"newfile.txt");
}
else{
    echo "file does not found";
}



this is use for delete file---------------->>>>>>
$file="myfile.txt";
if(file_exists($file)){
    unlink("myfile.txt");
    
}
else{
    echo "file does not found";
}


for rename------------------>>>
$file="myfile.txt";

    rename("newfile.txt","myfile.txt");
  this is use for filesize  
    $file="myfile.txt";
    echo filesize($file);



    this show filetype------------------>>>>

    $file="myfile.txt";
echo filetype($file);

show real path------------------>>>
$file="myfile.txt";
echo realpath($file);



this code show the path with proper formates...---------------->>>>
$file="myfile.txt";
echo realpath($file);
echo "<pre>";
print_r(pathinfo($file));
echo "</pre>";
*/

/*
$file="pglu";
if(!file_exists($file)){
    mkdir($file);
}else{
    echo "not found";
}

*/
//here we are remove a directory with this code.------------------->>>>>>
/*
$file="pglu";
if(file_exists($file)){
    rmdir($file);
}else{
    echo "not found";
}

*/

/*
$file=fopen("myfile.txt","r");
//here 10 is use for show at lest 10 letters.
echo fread($file,16);
*/

/*
$file=fopen("myfile.txt","r+");
//here 10 is use for show at lest 10 letters.
echo fread($file,5);
echo fwrite($file,"use of r");
*/


/*
$file=fopen("myfile.txt","w");
//in below line we are write a file content inside of the string.
echo fwrite($file,"hello, How are you");
*/


/*
$file=fopen("mypglu.txt","x+");
//x mode use for create a new file with given contents.

echo fwrite($file,"hello");
echo fread($file,15);
*/

?>