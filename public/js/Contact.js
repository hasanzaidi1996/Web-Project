function myMap() {
    var mapProp = {
        center: new google.maps.LatLng(52.508742, -0.120850),
        zoom: 5,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}

const patterns = {
    FirstName: /^[a-zA-Z]{2,100}$/i,
    LastName: /^[a-zA-Z]{2,100}$/i,
    Cell: /03[0-9]{2}[0-9]{7}/,
    Email: /^([a-z0-9\.-]+)@([a-z0-9-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/
};

function validate(field) {
    var bt = document.getElementById('#submit');
    if (patterns[field.name].test(field.value)) {
        field.className = "valid-field";
        bt.style.backgroundColor = "blue";
        bt.disabled = false;

    } else {
        field.className = "invalid-field";
        bt.style.backgroundColor = "red";
        bt.disabled = true;
    }
}
    document.getElementById("#textarea").onkeypress = function (e) {
        var output = document.getElementById("#counter"),
            textarea = document.getElementById("#textarea");

        var words = textarea.value.split("");
        if (words.length <= 400) {
            output.innerHTML = words.length + "/400";
        }
        else {
            e.preventDefault();
        }
    };
