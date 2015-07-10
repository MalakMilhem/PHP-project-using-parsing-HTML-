<a href="save_the_page.php">BACK</a>

<?php
include('simple_html_dom.php');
session_start();


//finding the <img>
$html = new simple_html_dom();  
$html = file_get_html($_SESSION['name_of_new_page']);//page.html

$my_img_url=$html->find('img') ;


foreach($my_img_url as $element) 
$my_img1[] =$element->src;



foreach($my_img1 as $i)
{
if(strpos($i, " ") !== false)
$my_img2[]=str_replace(" ","%20",$i);
else 
$my_img2[]=$i;
}




$http="http://";

foreach($my_img2 as $i)
{
$char = substr($i,0,7);
if($char!=$http)
{
$my_img3[]=$_SESSION['website'].$i;
}
else
{
$my_img3[]=$i;
}
}



foreach($my_img3 as $i)
{
$char = substr($i,0,1);
if($char=='h')
{
$my_img[]=$i;
}
}

foreach($my_img as $i)
{
echo $i."<br>";
}


$fullpath ="images_saved";
foreach($my_img as $i)
{
    image_save_from_url($i,$fullpath); 
    }
 
?>