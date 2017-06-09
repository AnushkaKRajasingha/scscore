<?php
if (!defined('SCSCORE')) {
	define('SCSCORE', 'SCSCORE');
}
require_once 'plugin-init_var.php';
$plugin_var = new init_var();
$plugin_var->_initVar();
require_once SCSCORE_INC_DIR.'/plugin-core.php';
$_pluginCore = new Plugin_Core();