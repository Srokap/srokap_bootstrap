<?php
/**
 * Site navigation menu
 *
 * @uses $vars['menu']['default']
 * @uses $vars['menu']['more']
 */

$default_items = elgg_extract('default', $vars['menu'], array());
$more_items = elgg_extract('more', $vars['menu'], array());


echo <<<EOF
<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</button>

<div class="collapse navbar-collapse navHeaderCollapse">
EOF;


echo '<ul class="nav navbar-nav">';
foreach ($default_items as $menu_item) {
	echo elgg_view('navigation/menu/elements/item', array('item' => $menu_item));
}

if ($more_items) {
	echo '<li class="dropdown">';

	$more = elgg_echo('more');
	echo "<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">$more <b class=\"caret\"></b></a>";
	
	echo elgg_view('navigation/menu/elements/section', array(
		'class' => 'dropdown-menu',
		'items' => $more_items,
	));
	
	echo '</li>';
}
echo '</ul>';

echo '</div>';