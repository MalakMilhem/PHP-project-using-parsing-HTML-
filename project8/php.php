<?php
session_start();
$file = fopen($_SESSION['name_of_new_page'],"w");
echo fwrite($file,"Hello World. Testing!");
fclose($file);

?>