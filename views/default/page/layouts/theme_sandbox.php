<?php
/**
 * Theme sandbox layout
 *
 * @uses $vars['title']
 * @uses $vars['content']
 */

$title = elgg_view_title($vars['title'], array('class' => 'theme-sandbox-page-heading'));
$content = elgg_extract('content', $vars);

$sidebar_menu = elgg_view_menu('theme_sandbox', array('sort_by' => 'name'));
$sidebar = elgg_view_module('theme-sandbox-nav', 'Sections', $sidebar_menu);

echo <<<HTML
<div class="row">
	<div class="col-md-9">
		<div class="elgg-head clearfix">
			$title
		</div>
		<div class="theme-sandbox-content elgg-body">
			$content
		</div>
	</div>
	<div class="col-md-3">
		$sidebar
	</div>
</div>
HTML;
