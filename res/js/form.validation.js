$(function () {
	$("form[name='submitRegister']").validate({
		// Define validation rules
		rules: {
			fullName: "required",
			reg: "required",
			email: "required",
			pass: "required",
			confirmPass: "required",
			fullName: {
				required: true,
				minlength: 3,
			},
			reg: {
				required: true,
				minlength: 3,
			},
			email: {
				required: true,
				email: true,
			},
			pass: {
				required: true,
				minlength: 8,
			},
			confirmPass: {
				required: true,
				minlength: 8,
				equalTo: "#pass",
			},
		},
		// Specify validation error messages
		messages: {
			fullName: {
				required: "Please provide a valid name.",
				minlength: "Please provide a valid name.",
			},
			reg: {
				required: "Please provide a valid name.",
				required: "Please provide a valid name.",
			},
			email: {
				required: "Please enter your email",
				minlength: "Please enter a valid email address",
			},
			pass: {
				required: "Please enter a password",
				minlength: "Password must be more than 8 character",
			},
			confirmPass: {
				required: "Please enter your confirm password",
				minlength: "Password must be more than 8 character",
				equalTo: "Password does't not match",
			},
		},
		submitHandler: function (form) {
			form.submit();
		},
	});
});
