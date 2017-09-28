"use strict";$(".nav-xs-trigger").on("click",function(){$(".nav-xs-panel").addClass("active"),$(".nav-xs-overlay").addClass("active")}),$(".nav-xs-overlay").on("click",function(){$(".nav-xs-panel").removeClass("active"),$(".nav-xs-overlay").removeClass("active")}),$("#file").change(function(){var a=$(this).val().replace(/.*(\/|\\)/,"");$(".form-control-file-text").html(a)});


$("#btnSubmit").click(function(){
    $("#btnSubmit").attr("disabled", true);
	// get values from FORM
	var email = $("input#email").val();
	var message = $("input#message").val();
	$.ajax({
		url: base_url + "about_us/contact",
		type: "POST",
		data: {
			email: email,
			message: message
		},
		cache: false,
		success: function(data) {
			if(data == "ok")
			{
				// Enable button & show success message
				$("#btnSubmit").attr("disabled", false);
				$('#success').html("<div class='alert alert-success'>");
				$('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
					.append("</button>");
				$('#success > .alert-success')
					.append("<strong>Thanks for contacting us, "+email+". We will contact you back soon. </strong>");
				$('#success > .alert-success')
					.append('</div>');

				//clear all fields
				$('#contactForm').trigger("reset");
			}
			else
			{
				// Fail message
				$("#btnSubmit").attr("disabled", false);
				$('#success').html("<div class='alert alert-danger'>");
				$('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
					.append("</button>");
				$('#success > .alert-danger').append("<strong>Sorry " + email + ", your message was not delivered successfully. Please try again later.");
				$('#success > .alert-danger').append('</div>');
				//clear all fields
				$('#contactForm').trigger("reset");
			}
			
		}
	});
});
