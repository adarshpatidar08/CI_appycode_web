$(function () {
	var $UserContactForm = $("#user_contact_form");
	if ($UserContactForm.length) {
		$UserContactForm.validate({

			rules: {
				username: {
					required: true,
				},
				email: {
					required: true,
					email: true,
				},
				message:{
					required: true,
				}
			},
			messages: {
				username: {
					required: "The User Name field is required."
				},
				email: {
					required: "The Email field is required."
				},
					message: {
						required: "The Message field is required.",
					}
			},
			errorPlacement: function (error, element) {
				error.insertAfter($(element).parent());
			},
			submitHandler: function (form) {
				form.submit();
			}
		})
	}
})
