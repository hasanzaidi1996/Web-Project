
var i = 1;
var var_timeout;
function playSlide() {
    var_timeout = setInterval(change_img, 4000);
}

function change_img() {
    if (i >= 6) {
        i = 1;
    }
    console.log("#hero");
    document.querySelector("#hero").style.background = `url(images/car${i}.jpg)`;
    document.querySelector("#hero").style.transition = "all 3s";
    i++;
}
