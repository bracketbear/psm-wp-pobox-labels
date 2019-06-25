<?php

/**
 * Plugin Name: Pete's Sink Mount P.O. Box Labels
 * 
 * Author Name: Harrison Callahan
 * Author URI:  https://harrisoncallahan.com
 * 
 * Version 1.0.0
 */

if(!defined('ABSPATH')) die ('No direct access allowed');

$psm_pobox_plugin_path = plugin_dir_path( __FILE__ );

require_once "$psm_pobox_plugin_path/src/class-psm-pobox-labels.php";

$psm_pobox_plugin = new PSM_POBox_Labels;
$psm_pobox_plugin->init();


?>