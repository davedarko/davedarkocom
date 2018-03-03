<?php
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<style>';
include('css/normalize.min.css');
include('css/skeleton.min.css');
echo '</style>';
echo '</head>';

echo '<body>';
include('../parsedown/Parsedown.php');
$Parsedown = new Parsedown();


$file_name = "content/table.md";
$myfile = fopen($file_name, "r") or die("Unable to open file!");
$file_content = fread($myfile, filesize($file_name));
fclose($myfile);

echo '<div class="container">';
echo '<h1>Heading</h1>';
echo $Parsedown->text('Hello _Parsedown_!');
echo $Parsedown->text($file_content);
echo '</div>';

$dir = 'content';
$files1 = scandir($dir);
if (is_array($files1))
{
	echo '<ul>';
	foreach ($files1 as $file)
	{
		// if (substr($file, -2))
		echo '<li>';
		echo $file;
		echo ' - ';
		echo substr($file, -2);
		echo '</li>';
	}
	echo '</ul>';
}


echo '</body>';
echo '</html>';
?>