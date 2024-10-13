<?php
// nl2br is used for newlines.
echo "Hello <br>";
echo "How are You<br>";
$file = basename($_SERVER['PHP_SELF']);
$no_of_lines = count(file($file));
echo "There are $no_of_lines lines in $file"."\n";
?>
