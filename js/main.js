// main.min.js

function toggle(id)
{
	var display_style = document.getElementById('folder_0').style.display;
	var visibility = display_style !== 'none';

	if (visibility)
	{
		display_style = '';
	}
	else
	{
		display_style = 'none';
	}
}