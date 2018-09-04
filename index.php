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

echo '<script>';
include('js/main.min.js');
echo '</script>';

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
if (isset($page))
{
	show_selected_page($dir, $page);	
}
else
{
	echo '<a href="https://twitter.com/davedarko">';
	echo 'https://twitter.com/davedarko';
	echo '</a><br>';

	echo '<a href="https://www.youtube.com/davedarko">';
	echo 'https://www.youtube.com/davedarko';
	echo '</a><br>';

	echo '<a href="https://www.instagram.com/davedarkocom/">';
	echo 'https://www.instagram.com/davedarkocom/';
	echo '</a><br>';

	echo '<a href="https://www.hackaday.io/davedarko">';
	echo 'https://www.hackaday.io/davedarko';
	echo '</a><br>';

	echo '<a href="https://www.tindie.com/stores/davedarko/">';
	echo 'https://www.tindie.com/stores/davedarko/';
	echo '</a><br>';

	echo '<a href="https://github.com/davedarko/">';
	echo 'https://github.com/davedarko/';
	echo '</a><br>';

	echo '<a href="https://www.thingiverse.com/davedarko/about">';
	echo 'https://www.thingiverse.com/davedarko/about';
	echo '</a><br>';
	
}
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

document.getElementById(id).style.
function scan_and_list_folder($dir, $folder_count = 0)
{
	$content_folder = scandir($dir, SCANDIR_SORT_DESCENDING);

	$files_output = '';
	$output = '';
	if (is_array($content_folder))
	{
		$dir_name = trim(str_replace('content', '', $dir));
		if (!empty($dir_name))
		{
			$output .= '<h2 onclick="toggle(\'folder_'.$folder_count.'\');">';
			$output .= make_that_filename_pretty($dir_name);
			$output .= '</h2>';
		}

		$output .= '<ul id="folder_'.$folder_count.'"';
		if (!empty($dir_name))
		{
			$output .= 'style="display:none;"';
		}
		$output .= '>';

		$folder_count++;
		
		foreach ($content_folder as $file_name)
		{
			$file_path = $dir . '/' . $file_name;
			if (
				is_dir($file_path) &&
				$file_name != '.' &&
				$file_name != '..'
			) {				
				$output .= scan_and_list_folder($file_path, $folder_count);
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