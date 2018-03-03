<?php

echo '<style>';
include('../Skeleton/css/normalize.css');
include('../Skeleton/css/skeleton.css');
echo '</style>';

include('../parsedown/Parsedown.php');
$Parsedown = new Parsedown();

echo $Parsedown->text('Hello _Parsedown_!');

?>