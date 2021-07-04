
const patterns = {

	name: /^[a-zA-Z]{3,10}$/i,
	username: /^[a-z0-9_\.]{3,10}$/,
	Email: /^([a-z0-9\.-]+)@([a-z0-9-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/,
	password: /^[a-zA-Z0-9@\-#$]{8,20}$/i,
	confirmpassword: /^[a-zA-Z0-9@\-#$]{8,20}$/i
};

function validate(field) {
	var bt = document.getElementById('#submit');
	if (patterns[field.name].test(field.value)) {
		bt.disabled = false;

	} else {
		bt.disabled = true;
	}

}
function checkpassword() {
	var bt = document.getElementById('#submit');
	var passd = document.getElementById("#pass");
	var cpassd = document.getElementById("#cpass");
	if (passd.value != cpassd.value) {
		bt.disabled = true;
		document.getElementsByClassName("print")[1].innerHTML = "Please Enter same Passwords in both Fields";
	}
	else {
		document.getElementsByClassName("print")[1].innerHTML = " ";
		bt.disabled = false;

	}
}