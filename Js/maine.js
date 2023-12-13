//add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
    list.forEach((item) => {
        item.classList.remove("hovered");
    });
    this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover" , activeLink));

// Menu toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let maine = document.querySelector(".maine");


toggle.onclick = function () {
    navigation.classList.toggle("active");
    maine.classList.toggle("active");
}