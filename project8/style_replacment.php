
<?php
$handle = fopen("style.css",'r+'); 
while (!feof($handle))
{ 

$text=fgets($handle);
$tag="<br>";


if (strpos($text,$tag) !== false)
 {
   $text2=str_replace($tag,"  ",$text);
   $text=$text2; 

}

echo $text."<br>";
 }
 
 ?>