<?php
$file_url="https://edunetfoundation.org/w-content/uploads/2022/06/edunet-logo-white.png";
header("Content-Type: application/octet-stream");
header("Content-Transfer-Encoding: utf-8");
header("Content-disposition: attachment;filename=\"".basename($file_url)."\"");
readfile($file_url);
?>