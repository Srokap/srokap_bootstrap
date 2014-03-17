<?php
$class = elgg_extract('class', $vars);

$vars['class'] = "nav nav-tabs $class";

echo elgg_view('navigation/menu/default', $vars);