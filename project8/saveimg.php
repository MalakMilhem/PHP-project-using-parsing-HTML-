<?php
include('library/simple_html_dom.php');

$html = new simple_html_dom();  
$html = file_get_html('alghad.html');
$my_img_url=$html->find('img') ;
$website_name="alghad";


foreach($my_img_url as $element) {
$n=strpos($element,$website_name);
if(empty($n))
$my_img[] = "http://www.alghad.com".$element->src;
if(!empty($n))
$my_img[] = $element->src;
}

$fullpath ="images_saved";
foreach($my_img as $i){
    image_save_from_url($i,$fullpath);
}
 
function image_save_from_url($my_img,$fullpath){
    if($fullpath!="" && $fullpath){
        $fullpath = $fullpath."/".basename($my_img);
    }
    $ch = curl_init ($my_img);
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
?>
