
const patterns = {

  title: /^[a-zA-Z]{10,100}$/i,
  discription: /^[a-zA-Z]{10,400}$/i,
  name: /^[a-zA-Z]{3,10}$/i,
  location: /^[a-zA-Z]{3,50}$/i
};

function validate(field) {
  var bt = document.getElementById('#submit');
  if (patterns[field.name].test(field.value)) {
    bt.disabled = false;

  } else {
    bt.disabled = true;
  }
}


function getImage()
{
  var getImageId = document.getElementById("#image");
  var getInputId = document.getElementById("file-input");
  var newImage = getInputId.files[0];
  if(newImage)
  {
    console.log(newImage.name);
    getImageId.src = URL.createObjectURL(newImage);
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