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

var menu_subs = document.getElementsByClassName('menu_sub');
if (is_array(menu_subs))
{
	menu_subs.forEach(function(element){
		element.style.display = 'none';
	});
}
