$(function () {

	$.validator.addMethod("alpha", function (value, element) {
		return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
	});

	var $UserContactForm = $("#user_contact_form");
	$UserContactForm.validate({

		rules: {
			username: {
				required: true,
				minlength: 3,
				alpha: true,
			},
			email: {
				required: true,
				email: true,
			},
			message: {
				required: true,
				maxlength: 250,
			}
		},
		messages: {
			username: {
				required: "The User Name field is required.",
				minlength: "The User Name field is required minimum 3 character",
				alpha: "Please enter only chracters and spaces",
			},
			email: {
				required: "The Email field is required.",
				email: "Please enter valid email",
			},
			message: {
				required: "The Message field is required.",
				maxlength: "Enter only maximum 250 character",
			}
		},
		errorPlacement: function (error, element) {
			error.insertAfter($(element).parent());
		},
		submitHandler: function (form) {
			form.submit();
		}
	})
})
