var nameregex = /\b[a-zA-Z]\b/;

var form = document.getElementById("signup-form");
var submit = $("submit-btn"); 

function emptycheck(field,error,errorText) {
	if (!field) {
		error.text(errorText);
		error.slideDown(400);
		setTimeout(function() {
			error.slideUp(400);
		},700);
		return false;
	}
	return true;
}


$("#signup-form").submit(function (e) {
	var name = $("#name").val();
	var pass = $("#password").val();
	var mail = $("#email").val();
	var pass2 = $("#password2").val();
	var nameError = $("#name-error");
	var nameErrorText = "Name is empty !";
	var passError = $("#pass-error");
	var passErrorText = "Password is empty !";
	var emailError = $("#email-error");
	var emailErrorText = "email is empty !";
	var pass2Error = $("#pass2-error");
	var pass2ErrorText = "Field is empty !";

	var namecheck = emptycheck(name,nameError,nameErrorText);
	var passcheck = emptycheck(pass,passError,passErrorText);
	var mailcheck = emptycheck(mail,emailError,emailErrorText);
	var pass2Check = emptycheck(pass2,pass2Error,pass2ErrorText);

	var check = false;

	var passMatch = false;
	if (pass !== "" && pass2 !== "" && (pass === pass2)) {
		passMatch = true;
	} else {
		pass2Error.text("Password doesn't match");
		pass2Error.slideDown(400);
		setTimeout(function() {pass2Error.slideUp(400)},700)
	}

	if (namecheck && passcheck && mailcheck && pass2Check && passMatch)
		check = true;
	else
		check = false;
	
	return check;
});
