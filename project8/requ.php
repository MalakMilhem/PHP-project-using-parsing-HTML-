
<a href="save_the_page.php">Back</a>

<?php

////////////save the style sheet img 

include('simple_html_dom.php');
include('extract_css_urls.php');
session_start();

$_SESSION['name_of_base_style'];//style_saved/Style.css

//finding the <href>
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
{
$href1[]=str_replace(basename($element),'', $element);////////////// bath for style
}


foreach($href1 as $hre)
{
$lenght=strlen($hre);
if(substr($hre,-1)=="/")
{
$href[]= substr($hre,0,$lenght-1);

}
}

foreach($href as $hre)
{
echo $hre."<br>";
}

//////////////////////////////////////////////////////////////////////

$name_of_base_style[]=$_SESSION['name_of_base_style'];


foreach ($name_of_base_style as $bath)
{
$text = file_get_contents($bath);
$urls[] = extract_css_urls($text);
}

foreach($urls as $i)
{
 foreach($i as $i2)
 {
  for($j=0;$j<count($i2);$j++)
  {
  
	$url[]=$i2[$j];
  }
}
}



$index="../";

foreach($url as $ii)
{
if(substr($ii,0,3)==$index)
{
foreach($href as $i)
{
$num= strrpos($i,'/');
$crop_href[]=substr($i,0,$num);
}
}
}
$result[] = array_unique($crop_href);


foreach($url as $imgurl)
{
$num= strpos($imgurl,'/');
$img_elements[] =substr($imgurl,$num);
}


// echo "<pre>";
// var_dump($img_elements);
// echo "</pre>";

foreach($result as $hre)
{
foreach ($hre as $r)
{
foreach( $img_elements as $img)
$full_url[]=$r.$img;
}
}

/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////
$index1=".../";



$http="http://";

foreach($full_url as $i)
{
$char = substr($i,0,7);
if($char!=$http)
{
$my_img[]=$_SESSION['website'].$i;
}
else
{
$my_img[]=$i;
}
}

$fullpath ="style_saved/images_saved";


foreach($my_img as $i)
{
echo $i."<br>";
}
///////////////////////////////////////////
foreach($my_img as $u)
{
$f1 = $u;
$file_headers = @get_headers($f1);
if($file_headers[0] == 'HTTP/1.1 404 Not Found')
 {
    $exists = false;
}
else {
    $exists = true;
	if( $exists)
	image_save_from_url($u,$fullpath);

}

}



function image_save_from_url($u,$fullpath)
{
   ini_set('max_execution_time', 1000);
   
   if($fullpath!="" && $fullpath)
	{
        $fullpath = $fullpath."/".basename($u);
    }


    $ch = curl_init ($u);
    curl_setopt($ch, CURLOPT_HEADER,0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);
    curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
    $rawdata=curl_exec($ch);
    curl_close ($ch);
	
    if(file_exists($fullpath))
	{
        unlink($fullpath);
    }
    $fp = fopen($fullpath,'w+'); 
    fwrite($fp, $rawdata);
    fclose($fp);

}
?>