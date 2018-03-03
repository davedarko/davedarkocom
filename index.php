<?php
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<meta charset="utf-8">';
echo '<meta name="description" content="">';
echo '<meta name="author" content="">';

echo '<!-- Mobile Specific Metas -->';
echo '<meta name="viewport" content="width=device-width, initial-scale=1">';

echo '<!-- CSS -->';
echo '<style>';
include('css/normalize.min.css');
include('css/skeleton.min.css');
include('css/font.min.css'); // fonts will be cached
echo '</style>';
echo '<title>';
echo 'davedarko.com';
echo '</title>';
echo '</head>';

echo '<body>';
include('../parsedown/Parsedown.php');
$Parsedown = new Parsedown();


echo '<div class="container">';
echo '<h1>davedarko</h1>';
// echo $Parsedown->text('Hello _Parsedown_!');

$dir = 'content';
$files1 = scandir($dir);
if (is_array($files1))
{
	echo '<ul>';
	foreach ($files1 as $file)
	{
		if (substr($file, -3) == '.md')
		{
			echo '<li>';
			echo '<a href="index.php?page='.md5($file).'">';
			echo $file;
			echo '</a>';
			echo '</li>';
		}
	}
	echo '</ul>';
}

if (is_array($files1))
{
	echo '<ul>';
	foreach ($files1 as $file_name)
	{
		if (
			isset($_GET['page']) &&
			md5($file_name) == $_GET['page']
		) {
			$myfile = fopen($file_name, "r") or die("Unable to open file!");
			$file_content = fread($myfile, filesize($file_name));
			fclose($myfile);
			echo $Parsedown->text($file_content);
		}
	}
	echo '</ul>';
}

echo '</div>';

echo '</body>';
echo '</html>';
?>