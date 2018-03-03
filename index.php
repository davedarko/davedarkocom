<?php
include('../parsedown/Parsedown.php');
$Parsedown = new Parsedown();

$page = null;
if (isset($_GET['page']))
{
	$page = $_GET['page'];
}

$dir = 'content';

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

echo '<div class="container">';
echo '<h1>davedarko</h1>';
echo '<div class="row">';
echo '<div class="four columns">';
echo scan_and_list_folder($dir);
echo '</div>';
echo '<div class="eight columns">';
show_selected_page($dir, $page);
echo '</div>';
echo '</div>';

echo '</div>';
echo '</body>';
echo '</html>';

function make_that_filename_pretty($filename)
{
	$time = substr($filename, 0, 12);

	if (is_numeric($time))
	{
		$lang = substr($filename, 13, 2);
		$name = substr($filename, 16);
		$name_arr = explode('.', $name);
		$name = str_replace('_', ' ', $name_arr[0]);
		return $name . '<br>['.$lang.'] ' . $time;
	}
	else
	{
		return str_replace('_', ' ', explode('.', $filename)[0]);
	}
}

function scan_and_list_folder($dir)
{
	$content_folder = scandir($dir, 1);

	$files_output = '';
	$output = '';
	if (is_array($content_folder))
	{
		$output .= '<h3>';
		$output .= make_that_filename_pretty($dir);
		$output .= '</h3>';
		$output .= '<ul>';
		foreach ($content_folder as $file_name)
		{
			$file_path = $dir . '/' . $file_name;
			if (
				is_dir($file_path) &&
				$file_name != '.' &&
				$file_name != '..'
			) {				
				$output .= scan_and_list_folder($file_path);
			}

			if (
				substr($file_name, -3) == '.md' || 
				substr($file_name, -4) == '.php' ||
				substr($file_name, -5) == '.html'
			) {
				$files_output .= '<li>';
				$files_output .= '<a href="index.php?page=' . $file_path . '">';
				$files_output .= make_that_filename_pretty($file_name);
				$files_output .= '</a>';
				$files_output .= '</li>';
			}
		}
		$output .= $files_output;
		$output .= '</ul>';
	}
	return $output;
}

function show_selected_page($dir, $page)
{
	global $Parsedown;
	$content_folder = scandir($dir, 1);
	if (is_array($content_folder))
	{
		foreach ($content_folder as $file_name)
		{
			$file_path = $dir . '/' . $file_name;

			if (
				is_dir($file_path) &&
				$file_name != '.' &&
				$file_name != '..'
			) {
				show_selected_page($file_path, $page);
			}

			if (
				isset($page) &&
				$file_path == $page
			) {
				if (substr($file_name, -3) == '.md')
				{
					$file_content = file_get_contents($file_path);
					echo $Parsedown->text($file_content);	
				}
				
				if (
					substr($file_name, -4) == '.php' ||
					substr($file_name, -5) == '.html'
				) {
					include($file_path);
				}
			}
		}
	}
}

?>