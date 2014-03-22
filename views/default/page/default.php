<?php
/**
 * Elgg pageshell
 * The standard HTML page shell that everything else fits into
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['head']        Parameters for the <head> element
 * @uses $vars['body_attrs']  Attributes of the <body> tag
 * @uses $vars['body']        The main content of the page
 * @uses $vars['sysmessages'] A 2d array of various message registers, passed from system_messages()
 */

// backward compatability support for plugins that are not using the new approach
// of routing through admin. See reportedcontent plugin for a simple example.
if (elgg_get_context() == 'admin') {
	if (get_input('handler') != 'admin') {
		elgg_deprecated_notice("admin plugins should route through 'admin'.", 1.8);
	}
	_elgg_admin_add_plugin_settings_menu();
	elgg_unregister_css('elgg');
	echo elgg_view('page/admin', $vars);
	return true;
}

// render content before head so that JavaScript and CSS can be loaded. See #4032

$messages = elgg_view('page/elements/messages', array('object' => $vars['sysmessages']));

$header = elgg_view('page/elements/header', $vars);
$header_logo = elgg_view('page/elements/header_logo', $vars);
$content = elgg_view('page/elements/body', $vars);
$footer = elgg_view('page/elements/footer', $vars);
$site_menu = elgg_view_menu('site');

$body = '';

if (elgg_is_logged_in()) {
	$topbar = elgg_view('page/elements/topbar', $vars);

	$body .= <<<__BODY
<nav class="navbar navbar-inverse navbar-static-top">
	<div class="elgg-page-topbar">
		<div class="elgg-inner container">
			$topbar
		</div>
	</div>
</nav>
__BODY;
}

$body .= <<<__BODY
<div class="elgg-page elgg-page-default">

	<div class="elgg-page-messages">
		$messages
	</div>
	<div class="elgg-page-header">
		<div class="elgg-inner container">
			$header
		</div>
	</div>

	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			$site_menu
		</div>
	</nav>

	<div class="elgg-page-body">
		<div class="elgg-inner container">
			$content
		</div>
	</div>
	<nav class="navbar navbar-inverse navbar-bottom">
		<div class="elgg-inner container">
			$footer
		</div>
	</nav>
</div>
__BODY;

$body .= elgg_view('page/elements/foot');

$head = elgg_view('page/elements/head', $vars['head']);

$params = array(
	'head' => $head,
	'body' => $body,
);

if (isset($vars['body_attrs'])) {
	$params['body_attrs'] = $vars['body_attrs'];
}

echo elgg_view("page/elements/html", $params);
