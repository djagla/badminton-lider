// document.addEventListener("DOMContentLoaded", function () {
// 	const navbar = document.getElementById("navbar");

// 	window.addEventListener("scroll", function () {
// 		if (window.scrollY > 50) {
// 			navbar.classList.add("nav-scrolled");
// 		} else {
// 			navbar.classList.remove("nav-scrolled");
// 		}
// 	});
// });

//const ENABLE_HIDE_ON_SCROLL = themeOptions.hideOnScroll;
const ENABLE_HIDE_ON_SCROLL = false; // Set to true to enable hide-on-scroll behavior, false to disable

document.addEventListener("DOMContentLoaded", function () {
	const navbar = document.getElementById("navbar");
	const inner = document.getElementById("navbar-inner");
	const logo = document.getElementById("navbar-logo");
	const cta = document.getElementById("navbar-cta");
	const essentialInfo = document.getElementById("navbar-essential-info");
	const essentialinfoContact = document.getElementById(
		"essential-info-contact",
	);

	let lastScroll = 0;
	let navbarHidden = false;
	let compact = false;

	gsap.set(navbar, { y: 0 });
	gsap.set(inner, { height: 96 }); // h-24

	window.addEventListener(
		"scroll",
		function () {
			const currentScroll = window.pageYOffset;

			// =================================
			// Hide / Show Navbar (Optional)
			// =================================

			if (ENABLE_HIDE_ON_SCROLL) {
				if (currentScroll > lastScroll && currentScroll > 120) {
					hideNavbar();
				} else {
					showNavbar();
				}
			}

			// =================================
			// 1️⃣ Hide / Show Whole Navbar
			// =================================

			function hideNavbar() {
				if (!navbarHidden) {
					gsap.to(navbar, {
						y: "-100%",
						duration: 0.4,
						ease: "power2.out",
					});
					navbarHidden = true;
				}
			}

			function showNavbar() {
				if (navbarHidden) {
					gsap.to(navbar, {
						y: "0%",
						duration: 0.4,
						ease: "power2.out",
					});
					navbarHidden = false;
				}
			}

			// =================================
			// 2️⃣ Compact Mode
			// =================================

			if (currentScroll > 80) {
				if (!compact) {
					const tl = gsap.timeline();

					// shrink height
					tl.to(inner, {
						height: 64,
						duration: 0.3,
						ease: "power2.out",
					});

					// scale logo
					tl.to(
						logo,
						{
							scale: 0.75,
							transformOrigin: "left center",
							duration: 0.3,
							ease: "power2.out",
						},
						0,
					);

					// hide essential info
					tl.to(
						essentialInfo,
						{
							gap: 0,
							duration: 0.25,
							ease: "power2.out",
						},
						0,
					);

					// hide CTA
					tl.to(
						cta,
						{
							height: 0,
							width: 0,
							opacity: 0,
							y: -400,
							duration: 0.25,
							ease: "power2.out",
							onComplete: () => {
								//cta.style.pointerEvents = "none";
							},
						},
						0,
					);

					// background + blur
					tl.to(
						navbar,
						{
							height: 80,
							// backgroundColor: "rgba(28,28,28,1)",
							backgroundColor: "rgba(255,255,255,1)",
							backdropFilter: "blur(12px)",
							boxShadow: "0 4px 20px rgba(0,0,0,0.08)",
							duration: 0.3,
							onComplete: () => {
								navbar.classList.add("scrolled");
							},
						},
						0,
					);

					compact = true;
				}
			} else {
				if (compact) {
					const tl = gsap.timeline();

					tl.to(inner, {
						height: 96,
						duration: 0.3,
						ease: "power2.out",
					});

					tl.to(
						logo,
						{
							scale: 1,
							duration: 0.3,
							ease: "power2.out",
						},
						0,
					);

					// hide essential info
					tl.to(
						essentialInfo,
						{
							gap: 16,
							duration: 0.25,
							ease: "power2.out",
						},
						0,
					);

					tl.to(
						cta,
						{
							height: 40,
							width: 287,
							opacity: 1,
							y: 0,
							duration: 0.25,
							ease: "power2.out",
						},
						0,
					);

					tl.to(
						navbar,
						{
							height: 120,
							backgroundColor: "rgba(0,0,0,0)",
							backdropFilter: "blur(0px)",
							boxShadow: "none",
							duration: 0.3,
							onComplete: () => {
								navbar.classList.remove("scrolled");
							},
						},
						0,
					);

					compact = false;
				}
			}

			lastScroll = currentScroll;
		},
		{ passive: true },
	);
});
