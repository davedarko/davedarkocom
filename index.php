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
include('css/font.min.css');
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

$dir = 'content';
$content_folder = scandir($dir);
if (is_array($content_folder))
{
	echo '<ul>';
	foreach ($content_folder as $file_name)
	{
		if (
			substr($file_name, -3) == '.md' || 
			substr($file_name, -4) == '.php' ||
			substr($file_name, -5) == '.html'
		) {
			echo '<li>';
			echo '<a href="index.php?page='.$file_name.'">';
			echo make_that_filename_pretty($file_name);
			echo '</a>';
			echo '</li>';
		}
	}
	echo '</ul>';
}

if (is_array($content_folder))
{
	echo '<div class="menu">';
	echo '<ul>';
	foreach ($content_folder as $file_name)
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

function make_that_filename_pretty($filename)
{
	$time = substr($filename, 0, 14);

	if (is_numeric($time))
	{
		$lang = substr($filename, 15, 2);
		$name = substr($filename, 18);
		$name_arr = explode('.', $name);
		$name = str_replace('_', ' ', $name_arr[0]);
		return $name . ' ['.$lang.'] ' . $time;
	}
	else
	{
		return explode('.', $filename)[0];
	}
}
?>