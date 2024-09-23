var sel = document.getElementById("nav-select");

document.getElementById("logo").onclick = () => {
	window.location.href = "../html/index.html"
}

sel.onchange = () => {
	switch (sel.value) {
		case "Home":
			window.location.href = "../html/index.html";
			break;
		case "Pets":
			window.location.href = "../html/pets.html";
			break;
		case "Add More":
			window.location.href = "../html/add.html";
			break;
		case "Gallery":
			window.location.href = "../html/gallery.html";
			break
	}
}



document.getElementById("search-nav").onchange = () => { console.log("search-nav changed") }
document.getElementById("nav-search").onclick = () => { console.log("search-nav-btn clicked") }
