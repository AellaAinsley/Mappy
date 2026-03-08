<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Name: $_GET["name]\n Sat breakfast: $_GET["sat_breakfast"]\n"; fwrite($myfile, $txt);
fclose($myfile);
?>
