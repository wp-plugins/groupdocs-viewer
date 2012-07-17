<?php

/*
Plugin Name: GroupDocs Viewer Embedder
Plugin URI: http://www.groupdocs.com/
Description: Lets you embed PPT, PPTX, XLS, XLSX, DOC, DOCX, PDF and many other formats from your GroupDocs acount in a web page using the GroupDocs Embedded Viewer (no Flash or PDF browser plug-ins required).
Author: GroupDocs Team <support@groupdocs.com>
Author URI: http://www.groupdocs.com/
Version: 1.2
License: GPLv2
*/

include_once('grpdocs-functions.php');


function grpdocs_getdocument($atts) {

	extract(shortcode_atts(array(
		'file' => '',
		'width' => '',
		'height' => '',
		'page' => 0,
		'version' => 1,
	), $atts));

	
	$guid = grpdocs_getGuid(urlencode($file));

//	$code = "<iframe src='https://dev-apps.groupdocs.com/document-viewer/embed/{$guid}' frameborder='0' width='600' height='700'></iframe>";
	$code = "<iframe src='http://apps.groupdocs.com/document-viewer/embed/{$guid}' frameborder='0' width='600' height='700'></iframe>";


	$code = str_replace("%W%", $width, $code);
	$code = str_replace("%H%", $height, $code);
	$code = str_replace("%P%", $page, $code);
	$code = str_replace("%V%", $version, $code);
	$code = str_replace("%A%", '', $code);
	$code = str_replace("%B%", $download, $code);
	$code = str_replace("%GUID%", $guid, $code);




	return $code;

}

//activate shortcode
add_shortcode('grpdocsview', 'grpdocs_getdocument');


// editor integration

// add quicktag
add_action( 'admin_print_scripts', 'grpdocs_admin_print_scripts' );

// add tinymce button
add_action('admin_init','grpdocs_mce_addbuttons');

// add an option page
add_action('admin_menu', 'grpdocs_option_page');
function grpdocs_option_page() {
	global $grpdocs_settings_page;

	$grpdocs_settings_page = add_options_page('GroupDocs', 'GroupDocs', 'manage_options', basename(__FILE__), 'grpdocs_options');

}
function grpdocs_options() {
	if ( function_exists('current_user_can') && !current_user_can('manage_options') ) die(t('An error occurred.'));
	if (! user_can_access_admin_page()) wp_die('You do not have sufficient permissions to access this page');

	require(ABSPATH. 'wp-content\plugins\groupdocs-viewer\options.php');
}
