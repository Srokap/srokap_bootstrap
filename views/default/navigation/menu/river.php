<?php
$class = elgg_extract('class', $vars);

$vars['class'] = "pull-right nav nav-pills $class";

echo elgg_view('navigation/menu/default', $vars);