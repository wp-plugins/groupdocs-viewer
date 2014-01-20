=== GroupDocs PDF Viewer Plugin for WordPress ===
Contributors: GroupDocs Team
Tags: groupdocs, groupdocs viewer, document viewer, pdf viewer, pdf viewer plugin, display pdf, embed pdf, word, doc, doc viewer, docx, excel, xls, xlsx, powerpoint, ppt, pptx, image viewer
Author URI: http://groupdocs.com
Requires at least: 2.8
Tested up to: 3.5.0
Stable tag: trunk
License: GPLv2 

Lets you embed the GroupDocs Word, Excel, Powerpoint, PDF Viewer into Wordpress for your documents.

== Summary ==

Seamlessly embed and display PDF, Microsoft Word, Excel and PowerPoint documents on your WordPress website.

== Description ==

GroupDocs' PDF viewer plugin enables you to easily embed and display PDF and Microsoft Office documents right on your WordPress website. The viewer doesn't require Adobe Reader, Flash or other browser plugins and comes with a convenient user interface for easy navigation when viewing multi-page documents.

<h4>Key Benefits of GroupDocs' PDF Viewer Plugin</h4>

1. <strong>Native text rendering.</strong> GroupDocs Viewer doesn't rasterize documents, but converts them to a combination of HTML, CSS and SVG. As a result, embedded documents are rendered as real text files, not images. This allows users, for example, to select and copy text to the clipboard right from the document embedded on your website.

2. <strong>No 3rd party software required.</strong> With GroupDocs' PDF viewer, users don't have to install Acrobat Reader, Flash or any other browser plugins - you just embed a document to a webpage and users can view it right away.

3. <strong>Unmatched display quality.</strong> Thanks to font extraction and true text rendering, you can embed documents to just about any page size without loss of display quality. Documents are zoomable and text always look clear and sharp.

4. <strong>Cross-browser compatibility.</strong> GroupDocs Viewer is mobile-ready and works with all browsers that support HTML5, including: IE8+, Chrome, Chrome for Android, Firefox, Firefox for Android, Opera, Opera Mini, Opera for Android, Safari 5+, and Mobile Safari.

5. <strong>Convenient UI.</strong> The PDF viewer plugin comes with a convenient interface, which allows users to easily browse embedded documents on your website. For example, users can scroll multipage documents or turn pages with a click of a button; jump straight to a specified page; preview pages with thumbnails; search for text within a document using keywords; zoom, print and download documents right from a web-browser. And if you don't want users to be able to copy your documents, you can easily restrict options for printing/downloading and text coping.

<h4>Supported File Formats</h4>

Portable Document Format: .pdf
Microsoft Word: .doc .docx .docm .dot .dotx .dotm
Microsoft Excel: .xls .xlsx .xlsm .xlsb .xml
Microsoft PowerPoint: .ppt .pptx
Microsoft Visio: .vsd .vdx .vss .vsx .vst .vtx .vsdx .vdw
Microsoft Project: .mpp .mpt
Microsoft Outlook: .msg .eml
OpenDocument Formats: .odt .ott .ods .odp
Rich Text Format: .rtf
Plain Text File: .txt
Comma-Separated Values: .csv
HyperText Markup Language: .htm .html .mht .mhtml
XML Paper Specification: .xps
AutoCAD Drawing File Format: .dxf
Image files: .bmp .gif .jpg .png .tiff
Electronic publication: .epub
<h4>Installation Instructions</h4>

<strong>Please note:</strong> To use the PDF viewer plugin on your WordPress website, you need to <a href="http://groupdocs.com/purchase/api-pricing" rel="nofollow" target="_blank">register with GroupDocs</a> first. We offer a free 14-day trial so that you can test before buying our service.

For more information on the GroupDocs' online PDF viewer, please visit the <a href="http://groupdocs.com/apps/viewer" target="_blank">product's homepage</a>.

<h4>Have Questions?</h4>

Please feel free to <a href="http://groupdocs.com/corporate/contact" rel="nofollow" target="_blank">contact us</a>!

== Installation ==

1. Upload the entire `groupdocs-embedder` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the `Plugins` menu in WordPress.
3. Done.

Upload the documents to your GroupDocs account. Use the GroupDocs Viewer Embedder button in the Visual editor to build the appropriate shortcode by copy&pasting the document groupdocs.com link.

The other way to embed the document is to upload it via this plugin to your groupdocs.com account then the shortcode will be automatically generated and inserted to the content of the post.

Be aware that to upload the document with this plugin to your groupdocs.com account you will have to input the  User Id and Private Key, which can be found at the bottom of the profile in the GroupDocs dashboard (click icon in the top right of the header to view the profile). It will then be stored in the Plugin Settings.

For detailed installation and usage instructions, please see <a href="http://groupdocs.com/docs/display/Viewer/Integrating+GroupDocs+Viewer+Plugin+with+WordPress" target="_blank">the plugin's documentation page</a>.



== Screenshots ==

1. Here's a screenshot of how to get your document link for insertion into the GroupDocs Viewer Embedder dialog
2. Here's a screenshot of the GroupDocs Viewer Embedder in a Wordpress blog



== Frequently Asked Questions ==

= Where can I get detailed help? =
For detailed installation and usage instructions, please see <a href="http://groupdocs.com/docs/display/Viewer/Integrating+GroupDocs+Viewer+Plugin+with+WordPress" target="_blank">the plugin's documentation page</a>.

If you still have questions, please feel free to <a href="http://groupdocs.com/corporate/contact" rel="nofollow" target="_blank">contact us</a>!

= Are there any specific PHP extensions that should be enabled? =
Yes, the cURL (extension=php_curl.dll) extension is required to run the viewer.

= How can I get a document ID (GUID)? =
Please see <a href="http://groupdocs.com/docs/pages/viewpage.action?pageId=1409575" target="_blank">this page</a> for details.

== Changelog ==

= 1.4.2 =
* Minor security fix

= 1.4.1 =
* Minor bug fix - updated browse and embed functionality

= 1.4.0 =
* Added enabling/disabling document downloading
* Added enabling/disabling document printing
* Added enabling/disabling text selecting and coping
* Minor bugfixes

= 1.3.14 =
* Fix bug to add signature in url.

= 1.3.13 =
* Add the signature in url.

= 1.3.12 =
* Fix bug with shortcode name.

= 1.3.11 =
* Updated GroupDocs SDK.

= 1.3.10 =
* Updated GroupDocs SDK.

= 1.3.10 =
* Updated GroupDocs SDK.

= 1.3.9 =
* Added error if PHP version is lower than 5.3.

= 1.3.8 =
* Added http or https protocol choosing.

= 1.3.7 =
* Fix bug with PHP Warning.

= 1.3.6 =
* Fixed a bug with pop-up window.

= 1.3.5 =
* Update GroupDocs SDK.

= 1.3.4 =
* Update tracking parameter.

= 1.3.3 =
* Updated titles.
* Fix the bug of repeating error message when no private or client keys.

= 1.3.2 =
* Fixed "Paste link" tab - renamed to "Paste GUID".
* Cleaned code.

= 1.3.1 =
* Fixed bug with upload file's shortcode.
* Fixed bug with reload link.

= 1.3.0 =
* New tree viewer.

= 1.2.2 =
* New tabs view.

= 1.2.1 =
* Updated compatibility, and tags.

= 1.2 = 
* Fixed a bug relating to url encoding in the file variable.
* Fixed issue relating to security warning in Chrome.
 
= 1.1 = 
* Fixed 2 path related bugs.

= 1.0 =
* Initial release.