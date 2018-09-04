// main.min.js
function is_array($a)
{
	return Array.isArray($a);
}

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

var list = document.getElementsByClassName("menu_sub");
for (var i = 0; i < list.length; i++)
{
	list[i].style.display = 'none';
}