<?php
elgg_register_event_handler('init', 'system', array('srokap_bootstrap', 'init'));
elgg_register_event_handler('pagesetup', 'system', array('srokap_bootstrap', 'pagesetup'));
