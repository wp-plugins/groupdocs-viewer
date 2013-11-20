<?php

/*
Plugin Name: GroupDocs Viewer Embedder
Plugin URI: http://www.groupdocs.com/
Description: Lets you embed PPT, PPTX, XLS, XLSX, DOC, DOCX, PDF and many other formats from your GroupDocs acount in a web page using the GroupDocs Embedded Viewer (no Flash or PDF browser plug-ins required).
Author: GroupDocs Team <support@groupdocs.com>
Author URI: http://www.groupdocs.com/
Version: 1.4.0
License: GPLv2
*/

include_once('grpdocs-functions.php');


function grpdocs_getdocument($atts) {

	extract(shortcode_atts(array(
		'file' => '',
		'width' => '',
		'height' => '',
		'protocol' => '',
        'download' => '',
        'print' => '',
        'use_pdf' => '',
        'quality' => '',
		'page' => 0,
		'version' => 1,
	), $atts));

    

    include_once(dirname(__FILE__) . '/tree_viewer/lib/groupdocs-php/APIClient.php');
    include_once(dirname(__FILE__) . '/tree_viewer/lib/groupdocs-php/StorageApi.php');
    include_once(dirname(__FILE__) . '/tree_viewer/lib/groupdocs-php/GroupDocsRequestSigner.php');
    include_once(dirname(__FILE__) . '/tree_viewer/lib/groupdocs-php/FileStream.php');
    $signer = new GroupDocsRequestSigner(get_option('viewer_privateKey'));

	$no_iframe = "If you can see this text, your browser does not support iframes. Please enable iframe support in your browser or use the latest version of any popular web browser such as Mozilla Firefox or Google Chrome. For more help, please check our documentation Wiki: <a href='http://groupdocs.com/docs/display/Viewer/GroupDocs+Viewer+Integration+with+3rd+Party+Platforms'>http://groupdocs.com/docs/display/Viewer/GroupDocs+Viewer+Integration+with+3rd+Party+Platforms</a>";

	if (isset($protocol) && $protocol == 'https') {
		$code = "https://apps.groupdocs.com/document-viewer/embed/{$file}?quality={$quality}&use_pdf={$use_pdf}&download={$download}&print={$print}&referer=wordpress-viewer/1.4";
	} 
	else {
		$code = "http://apps.groupdocs.com/document-viewer/embed/{$file}?quality={$quality}&use_pdf={$use_pdf}&download={$download}&print={$print}&referer=wordpress-viewer/1.4";
	}

    $url = $signer->signUrl($code);

        
    $code = "<iframe src='{$url}' frameborder='0' width='{$width}' height='{$height}'>{$no_iframe}</iframe>";

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

register_uninstall_hook( __FILE__, 'groupdocs_viewer_deactivate' );

function groupdocs_viewer_deactivate()
{
	delete_option('viewer_userId');
	delete_option('viewer_privateKey');	

}
function grpdocs_option_page() {
	global $grpdocs_settings_page;

	$grpdocs_settings_page = add_options_page('GroupDocs Viewer', 'GroupDocs Viewer', 'manage_options', basename(__FILE__), 'grpdocs_options');

}
function grpdocs_options() {
	if ( function_exists('current_user_can') && !current_user_can('manage_options') ) die(t('An error occurred.'));
	if (! user_can_access_admin_page()) wp_die('You do not have sufficient permissions to access this page');

	require(ABSPATH. 'wp-content/plugins/groupdocs-viewer/options.php');
}
