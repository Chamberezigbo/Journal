$(document).ready(function () {
	$("#form").validate({
		rules: {
			fullName: {
				required: true,
				rangelength: [10, 12],
			},
			email: {
				required: true,
				email: true,
			},
			reg: {
				required: true,
				rangelength: [10, 12],
				number: true,
			},
			pass: {
				required: true,
				minlength: 8,
			},
			confirmPass: {
				required: true,
				equalTo: "#password",
			},
		},
		messages: {
			fullName: "Please enter Name.",
			email: {
				required: "Please enter Email Address.",
				email: "Please enter a valid Email Address.",
			},
			reg: {
				required: "Please enter Contact.",
				rangelength: "Contact should be 10 digit number.",
			},
			pass: {
				required: "Please enter Password.",
				minlength: "Password must be at least 8 characters long.",
			},
			confirmPass: {
				required: "Please enter Confirm Password.",
				equalTo: "Confirm Password do not match with Password.",
			},
		},
		submitHandler: function (form) {
			form.submit();
		},
	});
});
