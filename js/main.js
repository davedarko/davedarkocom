// main.min.js

function toggle(id)
{
	e = document.getElementById(id);
	var display_style = e.style.display;
	var visibility = (display_style !== 'none');

	if (visibility)
	{
		display_style = '';
	}
	else
	{
		display_style = 'none';
	}

	console.log(id, display_style, visibility?1:0);
}