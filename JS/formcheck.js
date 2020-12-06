function checkEmail() {
	$email = document.getElementById('email');
	$ConfirmEmail = document.getElementById('ConfirmEmail');

	if ($email != $confirmemail) {
		alert("ENTERED EMAILS DO NOT MATCH. PLEASE RE-ENTER AGAIN.");
		stopEvent(checkEmail);
		return false;
		checkEmail.preventDefault();
 	}
 	else {
 		
 	}
 	fucntion checkForBlank() {
	var fname = document.getElementById('fname').value;  

 	if (fname == "" || fname = null) {
 		alert("Firstname field left blank. Please enter.");
 		return false; 
 	}
 	else {
		alert("Firstname has been filled in.")

	}
}