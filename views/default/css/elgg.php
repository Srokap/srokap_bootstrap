<?php
if (false){ ?><style type="text/css"><?php }
/**
 * Yay! We start from scratch! :-)
 */


//lists items fixes on list view
echo elgg_view('css/elements/reset', $vars);
//let's leave legacy icons
echo elgg_view('css/elements/icons', $vars);
?>

.elgg-icon {
	display: inline-block;
}

.elgg-avatar {
	position: relative;
	display: inline-block;
}

/* ***************************************
	HOVER MENU
*************************************** */
.elgg-menu-hover {
	display: none;
	position: absolute;
	z-index: 10000;

	overflow: hidden;

	min-width: 165px;
	max-width: 250px;
	border: solid 1px;
	border-color: #E5E5E5 #999 #999 #E5E5E5;
	background-color: #FFF;
	box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.50);
}
