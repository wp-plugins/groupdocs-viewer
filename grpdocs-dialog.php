<?php

// access wp functions externally
require_once('bootstrap.php');

ini_set('display_errors', '0'); 
error_reporting(E_ALL | E_STRICT);



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Group Docs Embedder</title>
	<script type="text/javascript" src="js/tiny_mce_popup.js"></script>
	<script type="text/javascript" src="js/grpdocs-dialog.js"></script>
	<script type="text/javascript" src="js/jquery-1.5.min.js"></script>    

    <style type="text/css">
	h2 {
		font-size: 12px;
		color: #000000;
		padding:10px 0;
	}
	.mceActionPanel {
		margin-top:20px;
	}
	.diy{
		margin:5px 5px -5px 10px;
	}
    </style>
    
</head>
<body>
<form id='form' onsubmit="GrpdocsInsertDialog.insert();return false;" method="post" action="" enctype="multipart/form-data">
  <h2 class="gray">Group Docs Shortcode Options</h2></td>
  </tr>
  
  <fieldset>
  <legend class="gray dwl_gray">Upload file to Group Docs</legend>
  <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td align="right" class="gray dwl_gray"><strong>Upload Document</strong><br />to your groupdocs.com account</td>
    <td valign="top"><input name="file" type="file" class="opt dwl" id="file" style="width:200px;" /><br/>
	<span id="uri-note"></span></td>
  </tr>  
  <tr>
    <td align="right" class="gray dwl_gray"><strong>User Id</strong><br />from your groupdocs.com account</td>
    <td valign="top"><input name="userId" type="text" class="opt dwl" id="userId" style="width:200px;" value="<?php echo get_option('userId'); ?>" /><br/>
	<span id="uri-note"></span></td>
  </tr>  
  <tr>
    <td align="right" class="gray dwl_gray"><strong>Private Key</strong><br />from your groupdocs.com account</td>
    <td valign="top"><input name="privateKey" type="text" class="opt dwl" id="privateKey" style="width:200px;" value="<?php echo get_option('privateKey'); ?>" /><br/>
	<span id="uri-note"></span></td>
  </tr>  
  </table>
  </fieldset>

  <br/>
  
  <fieldset>
  <legend class="gray dwl_gray">or paste Group Docs document link</legend>
  <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td align="right" class="gray dwl_gray"><strong>Document Link</strong><br />from your groupdocs.com Viewer</td>
    <td valign="top"><input name="url" type="text" class="opt dwl" id="url" style="width:200px;" /><br/>
	<span id="uri-note"></span></td>
  </tr>  
  </table>
  </fieldset>

  <br/>
  <fieldset>
  <legend class="gray dwl_gray">Required</legend>
  <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td align="right" class="gray dwl_gray"><strong>Height</strong></td>
    <td valign="top" style="width:200px;"><input name="height" type="text" class="opt dwl" id="height" size="6" style="text-align:right" value="700" />px</td>
  </tr>
  <tr>
    <td align="right" class="gray dwl_gray"><strong>Width</strong></td>
    <td valign="top"><input name="width" type="text" class="opt dwl" id="width" size="6" style="text-align:right" value="600" />px</td>
  </tr>
   </table>
   </fieldset>
   
   <table width="100%" border="0" cellspacing="0" cellpadding="5">
    <tr>
    <td colspan="2">
    <br />
    Shortcode Preview
    <textarea name="shortcode" cols="72" rows="2" id="shortcode"></textarea>
    </td>
  </tr> 
    
</table>

	<div class="mceActionPanel">
		<div style="float: left">
			<input type="button" id="insert" name="insert" value="{#insert}" onclick="GrpdocsInsertDialog.insert();" />
		</div>

		<div style="float: right">
			<input type="button" id="cancel" name="cancel" value="{#cancel}" onclick="tinyMCEPopup.close();" />
		</div>
	</div>
</form>

</body>
</html>
<?php
if(!empty($_POST) && !empty($_FILES)) {

    include_once('grpdocsAPIClient.php');
    include_once('grpdocsStorageAPI.php');

    $uploads_dir = dirname(__FILE__);

    $tmp_name = $_FILES["file"]["tmp_name"];
    $name = $_FILES["file"]["name"];
    move_uploaded_file($tmp_name, "$uploads_dir/$name");

    $privateKey = trim($_POST['privateKey']); 
	$userId = trim($_POST['userId']); 
//	$apiClient = new APIClient($privateKey, "https://dev-api.groupdocs.com/v2.0");
	$apiClient = new APIClient($privateKey, "https://api.groupdocs.com/v2.0");

	$api = new StorageAPI($apiClient);
	$result = $api->Upload($userId, $name, "uploaded", "file://$uploads_dir/$name");
	unlink("$uploads_dir/$name");
	
	echo"<script>
	tinyMCEPopup.editor.execCommand('mceInsertContent', false, '[grpdocsview file=\"" . @$result->result->url . "\" height=\"{$_POST['height']}\" width=\"{$_POST['width']}\"]');
	tinyMCEPopup.close();</script>"; 
	die;

} 
