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
include('css/font.min.css'); // fonts will be cached, so it's fine
include('css/custom.min.css');
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
	foreach ($files1 as $file_name)
	{
		if (
			substr($file_name, -3) == '.md' || 
			substr($file_name, -4) == '.php' ||
			substr($file_name, -5) == '.html'
		) {
			echo '<li>';
			echo '<a href="index.php?page='.$file_name.'">';
			echo $file_name;
			echo '</a>';
			echo '</li>';
		}
	}
	echo '</ul>';
}

if (is_array($files1))
{
	echo '<div class="menu">';
	echo '<ul>';
	foreach ($files1 as $file_name)
	{
		if (
			isset($_GET['page']) &&
			$file_name == $_GET['page']
		) {
			if (substr($file_name, -3) == '.md')
			{
				$file_content = file_get_contents('content/'.$file_name);
				echo $Parsedown->text($file_content);	
			}
			
			if (
				substr($file_name, -4) == '.php' ||
				substr($file_name, -5) == '.html'
			) {
				include('content/'.$file_name);
			}
			
		}
	}
	echo '</ul>';
	echo '</div>';
}

echo '</div>';

echo '</body>';
echo '</html>';
?>