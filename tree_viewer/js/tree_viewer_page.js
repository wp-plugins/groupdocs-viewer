var groupdocs_viewer_error_counter = 0;

(function($) {
	$(function() {
		loadFileTree($);
	})
})(jQuery);


function loadFileTree($){
	$('.aui-message').remove();
	groupdocs_keys_validation($);
	
	var private_key = $('#privateKey').val();
	var user_id = $('#userId').val();
	var parent = $("#groupdocsBrowser");
	var container = $("#groupdocsBrowserInner", parent);
	
	var opts = {
		script: 'tree_viewer/treeviewer.php?private_key=' + private_key + '&user_id=' + user_id,
		onTreeShow: function(){

		},
		onServerSuccess: function(){
			groupdocs_viewer_error_counter = 0;
			$("a", container).each(function() {
				var self = $(this);
				if(self.parent().hasClass("file")) {
				    document.getElementById('insert').disabled = false;
					self.click(function(e){
						e.preventDefault();
						var height = parseInt($('#height').val());
						var width =  parseInt($('#width').val());
						var protocol = $("input[@name'protocol']:checked").val()
						$('#shortcode').val('[grpdocsview file="' + self.attr('rel') + '" width="' + width + '" height="' +  height + '" protocol="' + protocol + '"]');
					})
				}
			});
		},
		onServerError: function(response) {
			groupdocs_viewer_error_counter += 1;
			if( groupdocs_viewer_error_counter < 3 ){
				loadFileTree($);
			}
			else {
				console.log(response);
				show_server_error($);
			}
		}
	};
	container.fileTree(opts);
}

function show_server_error($) {
	var message = "Uh oh, looks like we are currently experiencing difficulties with our API, please be so kind as to drop an email to <a href='mailto:support@groupdocs.com'>support@groupdocs.com</a> to let them know, thanks or <a href='#' onclick='loadFileTree(jQuery);return false'>click here</a> to try again.";
	$('#groupdocsBrowserInner').append($("<div class='aui-message warning'>" + message + "</div>"));
}

function groupdocs_keys_validation($) {
	var private_key = $('#privateKey');
	var user_id = $('#userId');
	var error_massage = $('#groupdocs_keys_error');
	var errors = 0;
	
	error_massage.hide();
	private_key.removeClass('error');
	user_id.removeClass('error');

	if( private_key.val() == '' ) {
		private_key.addClass('error');
		errors += 1;
	}
	if( user_id.val() == '') {
		user_id.addClass('error');
		errors += 1;
	}

	if( errors != 0 ) {
		$('#groupdocs_keys_error').show();
	}
}
