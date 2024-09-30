var sel = document.getElementById("nav-select");

document.getElementById("logo").onclick = () => {
	window.location.href = "./index.php";
};

sel.onchange = () => {
	switch (sel.value) {
		case "Home":
			window.location.href = "index.php";
			break;
		case "Pets":
			window.location.href = "pets.php";
			break;
		case "Add More":
			window.location.href = "add.php";
			break;
		case "Gallery":
			window.location.href = "gallery.php";
			break;
	}
};

document.getElementById("search-nav").onchange = () => {
	console.log("search-nav changed");
};
document.getElementById("nav-search").onclick = () => {
	console.log("search-nav-btn clicked");
};
