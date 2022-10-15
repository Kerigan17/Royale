<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$korm = $_POST['select-korm'];
$file = fopen("file.txt","at");
fwrite($file,"\n $name:$phone$korm \n");
fclose($file);
?>