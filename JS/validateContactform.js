function validateContactform{
	var valid = true;

	$("ContactForm").html("");

	var Firstname = $("#fname").val();
	var Surname = $("#sname").val();
	var Email = $("#email").val();
	var ConfirmEmail = $("#confirmemail").val();
	var Company = $("#company").val();

	if (Firstname == ""){
		$("Firstname-info").html("Required.");
		valid = false;
	}
	if (Surname == ""){
		$("Surname-info").html("Required.");
		valid = false;
	}
	if (Email == ""){
		$("Email-info").html("Required.");
		valid = false;
	}
	if (!Email.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)){
        $("#ConfirmEmail-info").html("Invalid Email Address.");
		valid = false;
	}
	if (Company == ""){
		$("Company-info").html("Required.");
		valid = false;
	}
	return valid;
}
