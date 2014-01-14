$(document).ready(function() {
	$("#flashMessage.alert").hide();

	$(".SendMessage").on('submit', function(e) {
		e.preventDefault();

		message = tinyMCE.activeEditor.getContent();

		if (!message)
		{
			$("#flashMessage.alert-error").show();
		} else {
            getBlockUI();

			$("#flashMessage.alert-error").hide();

			receiver_user_id = $("#MessageReceiverUserId").val();
			parent_id = $("#MessageParentId").val();
			subject = $("#MessageTitle").val();
			form_url = $(this).attr('action');

			$.post($("#webroot").text() + "messages/send/", 
            	{
            		data:
	            	{
	            		Message:
	            		{
	            			receiver_user_id: receiver_user_id,
	            			parent_id: parent_id,
	            			message: message,
	            			title: subject
	            		}
	            	}
	            }, function(data) {
				if (data.status)
				{
					$(".messages").load(form_url + '?unique=' + Math.round(Math.random()*10000) + ' .messages', function() {
                        $.unblockUI();
                        tinyMCE.activeEditor.setContent('');
						$("#flashMessage.alert-success").show().fadeOut(3000);
					});
				}
	        }, 'json');
		}
	});
});