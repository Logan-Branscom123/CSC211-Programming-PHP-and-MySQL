<?php
include("header.html");

$files = scandir(".");
echo "<h2>Files in Project Directory</h2>";
foreach($files as $file){
    if($file != "." && $file != ".."){
        echo $file . "<br>";
    }
}

echo "<br><a href='menu.php'>Back to Menu</a>";
include("footer.html");
?>
