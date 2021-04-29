$("#form_registration").validate({
	errorClass: "error_msg",
	errorElement: "span",

	rules: {
		user_name: {
			required: true,
			minlength: 3,
			maxlenght: 20,
		},
		user_email: {
			required: true,
			email: true,
		}
	},
	messages: {
		user_name: {
			required: "Please Enter Valid Name"
		},
		user_email: {
			required: "Please Enter Valid Name"
		},
	},
	errorPlacement: function (error, element) {
		error.insertAfter($(element).parent());
	},
	submitHandler: function (form) {
		form.submit();
	}
})
