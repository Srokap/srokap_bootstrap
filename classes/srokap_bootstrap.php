<?php
class srokap_bootstrap {
	public static function init() {
		elgg_register_js('bootstrap', elgg_get_site_url() . 'mod/' . __CLASS__ . '/vendors/bootstrap-3.1.1-dist/js/bootstrap.min.js');
		elgg_register_css('bootstrap', elgg_get_site_url() . 'mod/' . __CLASS__ . '/vendors/bootstrap-3.1.1-dist/css/bootstrap.min.css');
		elgg_register_css('bootstrap-theme', elgg_get_site_url() . 'mod/' . __CLASS__ . '/vendors/bootstrap-3.1.1-dist/css/bootstrap-theme.min.css');
	}

	public static function pagesetup() {
		if (!elgg_in_context('admin')) {
			elgg_load_js('bootstrap');
			elgg_load_css('bootstrap');
			elgg_load_css('bootstrap-theme');
		}
	}
}