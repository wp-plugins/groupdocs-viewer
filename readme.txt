=== GroupDocs Viewer Embedder ===
Contributors: GroupDocs Team
Tags: doc, docx, pdf, ppt, pptx, xls, xlsx, groupdocs
Author URI: http://groupdocs.com
Requires at least: 2.8
Tested up to: 3.4
Stable tag: trunk
License: GPLv2

Lets you embed the GroupDocs Viewer into Wordpress for your documents.

== Description ==

GroupDocs Viewer Embedder lets you embed several types of files into your WordPress pages using the GroupDocs High Fidelity Viewer - allowing inline viewing (and optional downloading) of the following file types, with no Flash or PDF browser plug-ins required: doc, docx, pdf, xls, xlsx, ppt, pptx and other formats

== Installation ==

1. Upload the entire `groupdocs-embedder` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Done.

Upload the documents to your GroupDocs account. Use the GroupDocs Embedder button in the Visual editor to build the appropriate shortcode by copy&pasting the document groupdocs.com link.

The other way to embed the document is to upload it via this plugin to your groupdocs.com account then the shortcode will be automatically generated and inserted to the content of the post.

Be aware that to upload the document with this plugin to your groupdocs.com account you will have to input the  User Id and Private Key, which can be found at the bottom of the profile in the GroupDocs dashboard (click icon in the top right of the header to view the profile). It will then be stored in the Plugin Settings.

== Frequently Asked Questions ==

= Are there any specific PHP extensions that should be enabled?  =

cURL extension is required (extension=php_curl.dll)