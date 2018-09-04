// main.min.js

function toggle(id)
{
	e = document.getElementById(id);
	display_style = e.style.display;
	var visibility = (display_style !== 'none');

	if (visibility)
	{
		display_style = 'none';

	}
	else
	{
		display_style = '';
	}

	document.getElementById(id).style.display = display_style;
}