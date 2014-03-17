<?php
/**
 * Elgg global system message list
 * Lists all system messages
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['object'] The array of message registers
 */

echo '<div class="container">';

$typeMapping = array(
	'success' => 'success',
	'error' => 'danger',
);

if (isset($vars['object']) && is_array($vars['object']) && sizeof($vars['object']) > 0) {
	foreach ($vars['object'] as $type => $list ) {
		foreach ($list as $message) {
			echo "<div class=\"alert alert-{$typeMapping[$type]}\">";
			echo elgg_autop($message);
			echo '</div>';
		}
	}
}

echo '</div>';
