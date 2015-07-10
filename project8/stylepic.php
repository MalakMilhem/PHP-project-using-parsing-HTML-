<?php

include('extract_css_urls.php');


$text = file_get_contents('style_saved/style.css');
$urls = extract_css_urls( $text );

echo "<pre>";
var_dump( $urls );
echo "</pre>";

if ( !empty( $urls['import'] ) )
echo "<pre>";
    var_dump( $urls['import'] );
echo "</pre>";	

	if ( !empty( $urls['property'] ) )
	echo "<pre>";
    var_dump('property' );
	echo "</pre>";	
?>


