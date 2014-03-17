<?php
/**
 * Elgg page header
 * In the default theme, the header lives between the topbar and main content area.
 */

echo '<div class="jumbotron">';

// link back to main site.
echo elgg_view('page/elements/header_logo', $vars);

// drop-down login
echo elgg_view('core/account/login_dropdown');

echo '</div>';
