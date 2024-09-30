var sel = document.getElementById("nav-select");

document.getElementById("logo").onclick = () => {
  window.location.href = "./index.php";
};

sel.onchange = () => {
  switch (sel.value) {
    case "Home":
      window.location.href = "/a2/php/pages/index.php";
      break;
    case "Pets":
      window.location.href = "/a2/php/pages/pets.php";
      break;
    case "Add More":
      window.location.href = "/a2/php/pages/add.php";
      break;
    case "Gallery":
      window.location.href = "/a2/php/pages/gallery.php";
      break;
  }
};

document.getElementById("search-nav").onchange = () => {
  console.log("search-nav changed");
};
document.getElementById("nav-search").onclick = () => {
  console.log("search-nav-btn clicked");
};
