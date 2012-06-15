function validateForm() {
	var alertText = "";

	var name = document.getElementById("name").value;
	if (name=="") {
		alertText += "Please emter your name.\n";
		return false;
	}
	var phone1 = document.getElementById("phone1").value;
	var phone2 = document.getElementById("phone2").value;
	var phone3 = document.getElementById("phone3").value;
	if (phone1.match(/\d\d\d/)==null || phone2.match(/\d\d\d/)==null || phone3.match(/\d\d\d\d/)==null {
		alertText += "Please enter your phone number.\n";
		return false;

	}
	var troop = document.getElementById("troop").value;
	if (troop.match(/\d\d\d\d?/)==null) {
		alertText += "Please enter your troop number.\n";
		return false;
	}
	var mail = document.getElementById("email").value;
	if (mail.match(/\S*\@\w\.\w/)==null) {
		alertText += "Please enter your e-mail and in the correct format.";
		return false;
	}
	var user = document.getElementById("user").value;
	if (user.match(/\d*/)!=null) {
		alertText += "Please only use letter in your Username!\n";
		return false;
	}
	if (user.match(/\w\d*/)!=null) {
		alertText += "Please only use letters in your Username!\n";
		return false;
	}	
	if (user=="") {
		alertText += "Please enter a Username. \n";
		return false;
	}
	var pass = document.getElementById("pass1").value;
	if (pass=="") {
		alertText += "Please enter a password.\n";
		return false;
	}
	var check = document.getElementById("pass2").value;
	if (check!=pass) {
		alertText += "The passwords you entered do not match.\n Please reenter them.";
		return false;
	}
	else {
		alertText += "Please remember your password!";
	}

	if (alertText == "") {
		return true;
	}
	else {
		alert(alertText);
	}
}
