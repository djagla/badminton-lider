document.addEventListener("DOMContentLoaded", function () {
	const navbar = document.getElementById("navbar");

	window.addEventListener("scroll", function () {
		if (window.scrollY > 50) {
			navbar.classList.add("nav-scrolled");
		} else {
			navbar.classList.remove("nav-scrolled");
		}
	});
});
