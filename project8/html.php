
<?php 

  include('simple_html_dom.php'); 
  include('extract_css_urls.php');
  session_start();
$fileName = $_SESSION['name_of_new_page'];

//replace on html file
$html = new simple_html_dom();  
$html = file_get_html($_SESSION['name_of_new_page']);
$my_img_url=$html->find('img') ;
$my_style_url=$html->find('link') ;


$text = file_get_contents('style_saved/style.css');
$urls = extract_css_urls($text);

foreach($urls['property'] as $element)
{
$num= strpos($element,'../');
$img_elements[] =substr($element,$num);
}


$file = fopen("style_saved/test.css","w");
$handle = fopen("style_saved/style.css",'r+'); 
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

/////////////////////




$handle1 = fopen($fileName,'r'); 
while (!feof($handle1))
	{ 
	$text1=fgets($handle1);

	foreach($my_style_url as $element)
		{
		 $style_name= basename($element->href);

			if (strpos($text1,$style_name) !== false)
			 {

			   $text2=str_replace($element->href,"style_saved/test.css", $text1);
			   $text1=$text2;

			}
		}
		

foreach($my_img_url as $element)
		{
		 $img_name= basename($element->src);
		 
		if (strpos($text1,$img_name) !== false)
			 {
			 
			 //echo $element->src;
			 //echo $img_name;
			//echo $my_img_url["attr"]["src"];

			   $text2=str_replace($element->src,"images_saved/".$img_name, $text1);
			   $text1=$text2;
			}
		}

	}


//////////////////////////

echo fwrite($file,$text);
echo fwrite($file,$text1);
echo $text."<br>";
 }
 fclose($file); 
 fclose($handle1);
fclose($handle);

?>


