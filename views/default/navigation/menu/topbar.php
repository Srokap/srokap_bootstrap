<?php
/**
 * Site navigation menu
 *
 * @uses $vars['menu']['default']
 * @uses $vars['menu']['more']
 */

$default_items = elgg_extract('default', $vars['menu'], array());
$more_items = elgg_extract('alt', $vars['menu'], array());

echo <<<EOF
<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapseTopbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</button>

<div class="collapse navbar-collapse navHeaderCollapseTopbar">
EOF;

echo '<ul class="nav navbar-nav">';
foreach ($default_items as $menu_item) {
	echo elgg_view('navigation/menu/elements/item', array('item' => $menu_item));
}
echo '</ul>';

if ($more_items) {
	echo elgg_view('navigation/menu/elements/section', array(
		'class' => 'nav navbar-nav navbar-right',
		'items' => $more_items,
	));
}

echo '</div>';