// This is for the page loader function
var loader = document.querySelector(".loader");

window.addEventListener("load", vanish);

function vanish() {
	loader.classList.add("disppear");
}

//Now this if for the search bar function