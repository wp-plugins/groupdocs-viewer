=== Group Docs Viewer Embedder ===
Contributors: Sergiy Osypov
Tags: doc, docx, pdf, group docs
Author URI: http://www.groupdocs.com
Requires at least: 2.8
Tested up to: 3.4
Stable tag: trunk
License: GPLv2

Lets you embed Group Docs Viewer for your documents.

== Description ==

Group Docs Viewer Embedder lets you embed several types of files into your WordPress pages using the Group Docs Viewer - allowing inline viewing (and optional downloading) of the following file types, with no Flash or PDF browser plug-ins required:

== Installation ==

1. Upload the entire `groupdocs-embedder` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Done.

Upload the documents to your Group Docs account. Use the Group Docs Embedder button in the Visual editor to build the appropriate shortcode by copy&pasting the document groupdocs.com link.

The other way to embed the document is to upload it via this plugin to your groupdocs.com account then the shortcode will be automatically generated and inserted to the content of the post.

Be aware that to upload the document with this plugin to your groupdocs.com account you will have to input its User Id and Private Key. It could be stored in the Plugin Settings.

== Frequently Asked Questions ==

= Are there any specific PHP extensions that should be enabled?  =

cURL extension is required (extension=php_curl.dll)