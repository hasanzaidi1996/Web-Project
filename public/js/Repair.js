
const patterns = {

    name: /^[a-zA-Z]{3,10}$/i,
    email: /^([a-z0-9\.-]+)@([a-z0-9-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/,
    number: /03[0-9]{2}[0-9]{7}/,
};

function validate(field) {
    var bt = document.getElementById('#submit');
    if (patterns[field.name].test(field.value)) {
        bt.disabled = false;

    } else {
        bt.disabled = true;
    }

}


document.getElementById("#textarea").onkeypress = function (e) {
    var output = document.getElementById("#counter"),
        textarea = document.getElementById("#textarea");

    var words = textarea.value.split("");
    if (words.length <= 400) {
        document.getElementById("#counter").innerHTML = words.length + "/400";
    }
    else {
        e.preventDefault();
    }

}