<a href="save_the_page.php">BACK</a>



<?php
$file = "style_saved/style.css";
if (!unlink($file))
  {
  echo ("Error deleting $file");
  }
else
  {
  echo ("Deleted $file");
  }
  
  
  rename("style_saved/test.css", "style_saved/style.css");
?>