/*
var courses;

var xmlHttp = new XMLHttpRequest();
xmlHttp.onreadystatechange = function() {
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        console.log(xmlHttp.responseText);
        courses = JSON.parse(xmlHttp.responseText);
    }
}
xmlHttp.open("GET", "/data/courses.json", true);
xmlHttp.send(null);
*/

//Navbar scroll transition
var navbar = document.querySelector(".navbar");

//Navbar collapse
var toggle = document.querySelector(".nav-toggle");
var navOpen = false;

toggle.addEventListener("click", function(e) {
    if (navOpen) {
        navbar.classList.remove("open");
        navOpen = false;
    }
    else {
        navbar.classList.add("open");
        navOpen = true;
    }
});