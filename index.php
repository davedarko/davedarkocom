<?php

echo '<style>';
include('css/normalize.css');
include('css/skeleton.css');
echo '</style>';

include('../parsedown/Parsedown.php');
$Parsedown = new Parsedown();

echo $Parsedown->text('Hello _Parsedown_!');

$file_name = "content/table.md";
$myfile = fopen($file_name, "r") or die("Unable to open file!");
$file_content = fread($myfile, filesize($file_name));
fclose($myfile);

echo $Parsedown->text($file_content);

?>