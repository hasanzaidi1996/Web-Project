const patterns = {

	username: /^[a-z0-9_\.]{3,10}$/,
	password: /^[a-zA-Z0-9@\-#$]{8,20}$/i
};

function validate(field) {
	var bt = document.getElementById('#submit');
	if (patterns[field.name].test(field.value)) {
		bt.style.backgroundColor = "rgb(65, 65, 182)";
		bt.disabled = false;
	} else {
		bt.style.backgroundColor = "red";
		bt.disabled = true;
	}

}