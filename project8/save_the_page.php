<html> 
<body>

<form  method="post">
website: <input type="text" name="website"><br>
URL: <input type="text" name="name"><br>
<input type="submit" name="sub">
</form>


<a href="save_style_sheets.php" >Save the style sheets</a><br>
<a href="save_imgs_o_computer.php" >Save imgs</a><br>
<a href="csswithhtml.php" >save new style sheet</a><br>
<a href="unlink.php" >unlink the style sheet</a><br>
<a href="replace.php" >new page</a><br>
<a href="requ.php" >styleimg</a><br>
</body>
</html>


<?php
session_start();

//save the page in my computer
if(!empty($_POST['sub']))
{

$https="https";
$http="http";
$s="s:";

$url = substr($_POST["name"],4,2);

$_SESSION['website']=$_POST["website"];
echo $_SESSION['website'];
if($url==$s)
$_POST["name"]=str_replace($https,$http,$_POST["name"]);


$homepage = file_get_contents($_POST["name"]);
$_SESSION['url']=$_POST["name"];

$_SESSION['name_of_new_page']="page.html";//html
file_put_contents($_SESSION['name_of_new_page'],$homepage);
echo "<br>".$_SESSION['url'];
}

?>
		  
