<?php
$f = fopen("12.txt","r") or die("error");
echo fread($f,filesize("1.txt"));
fclose($f);
?>