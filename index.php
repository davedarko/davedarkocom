<?php

echo '<style>';
include('css/normalize.css');
include('css/skeleton.css');
echo '</style>';

include('../parsedown/Parsedown.php');
$Parsedown = new Parsedown();

echo $Parsedown->text('Hello _Parsedown_!');

?>