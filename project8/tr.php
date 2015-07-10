
<a href="save_the_page.php">BACK</a>


<?php 
  include('simple_html_dom.php');
  include('extract_css_urls.php');
  session_start();
//////////////

$html = new simple_html_dom();  
$html = file_get_html($_SESSION['name_of_new_page']);

$my_style_url=$html->find('link') ;
foreach($my_style_url as $element)
{
$my_style[] = $element->href;
}

foreach($my_style as $element) 
{
$num= strrpos($element,'/');
$elements[] =substr($element,0,$num);
}

foreach($my_style as $element) 
$basename_for_style[]= basename($element);

foreach($basename_for_style as $i)
{
$style_bath[]='style_saved/'.$i;
}

//////////////

foreach($style_bath as $i)
{

$text = file_get_contents($i);
$urls = extract_css_urls($text);

if(!empty($urls))
{
$name_of_base_style[]=$i;
foreach($urls['property'] as $element)
{
$num= strpos($element,'../');
$img_elements[] =substr($element,$num);
}
}
}

//////////////////////////////////////////
$name=array();
$number_of_element=count($name_of_base_style);


for ($x = 0; $x < $number_of_element; $x++)
{
    array_push($name, $x);
}

///////////////////////////////////////////

foreach($name_of_base_style as $url)
{
 style_save_from_url($url,$img_elements);
}


function style_save_from_url($my_style,$img_elements)
{


$file = fopen("style_saved/test.css","w");

$handle = fopen($my_style,'r+'); 
while (!feof($handle))
{ 

$text=fgets($handle);

foreach($img_elements as $element)
{
 $img_name= basename($element);

if (strpos($text,$img_name) !== false)
 {
   $text2=str_replace($element,"images_saved/".$img_name,$text);
   $text=$text2; 
}

}
echo fwrite($file,$text);
echo $text."<br>";
 }
 fclose($file); 
fclose($handle);
}

$file = fopen("style_saved/testttttttt.css","w");
$handle = fopen("http://localhost//project/csswithhtml.php",'r+'); 
 fclose($file); 
fclose($handle);

?>