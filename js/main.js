// main.min.js

function toggle(id)
{
	var display_style = document.getElementById(id).style.display;
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