
var slider = document.getElementById("myRange");
var output = document.getElementById("value");


output.innerHTML = slider.value;
slider.oninput = function () {

    document.cookie = output.innerHTML = this.value;
}