
<a href="save_the_page.php">BACK</a>
<?php 
session_start();
  include('simple_html_dom.php');

//finding the <href>
$html = new simple_html_dom();  
$html = file_get_html('page.html');

$my_style_url=$html->find('link') ;

 echo "<pre>";
 var_dump($my_style_url);
 echo "</pre>";
/*




foreach($my_style_url as $element) 
$my_style1[] = $element->href;

///////////////////////////////////////////////

$http="http://";

foreach($my_style1 as $i)
{
$char = substr($i,0,7);
if($char!=$http)
{
$my_style[]=$_SESSION['website'].$i;
}
else
{
$my_style[]=$i;
}
}

/////////////////////////////////////////////////


foreach($my_style as $element) 
echo "<br>".$element."<br>";



////////////////////////////////////////////////////////
$fullpath ="style_saved";

foreach($my_style as $i){
    style_save_from_url($i,$fullpath);
}




 //save tyle files
function style_save_from_url($my_style,$fullpath){
   ini_set('max_execution_time', 1000);

    if($fullpath!="" && $fullpath){
        $fullpath = $fullpath."/".basename($my_style);
    }
    $ch = curl_init ($my_style);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);
    curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
    $rawdata=curl_exec($ch);
    curl_close ($ch);
    if(file_exists($fullpath)){
        unlink($fullpath);
    }
	

    $fp = fopen($fullpath,'x');
    fwrite($fp, $rawdata);
    fclose($fp);

	
}
*/

?>