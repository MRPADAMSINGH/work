<?php

/*
//initialize a variable of string type
$site = "edunetfoundation";

preg_match('/(edu)(net)(foundation)/',$site, $matches, PREG_OFFSET_CAPTURE);
//display the matches result


echo "<pre>";
print_r($matches);
echo "</pre>";

*/

/*
$date = 'May 29, 2020';
$pattern = '/(\w+) (\d+), (\d+)/i';
$replacement = '${1} 5,$3';

echo preg_replace($pattern, $replacement, $date);

*/

/*
$ip = "123.456.789.000"; //some ip address
$iparr= preg_split("/\./", $ip);
print "$iparr[0]<br/>";
print "$iparr[1] <br/>";
print "$iparr[2] <br/>";
print "$iparr[3] <br/>";
*/

$keyword = '$40 for a g3/400';
$keywords= preg_quote($keyword, '/');

echo $keyword;







?>