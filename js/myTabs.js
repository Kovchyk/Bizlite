window.onload = function() {
	tabs();
}

function tabs() {
	var linkActive;
	var tabset = document.querySelector(".tabset");
	var links = tabset.querySelectorAll("a");
	
	// hide not active blocks on page load
	for (var i = 0; i < links.length; i++) {
		if (links[i].className.indexOf("active") == -1) {
			document.querySelector(links[i].hash).style.display="none";
		} else {
			linkActive = links[i];
			document.querySelector(links[i].hash).style.display="block";
		}
	}

	// set active class to another link and show appropriated tab
	tabset.onclick = function(event) {
		if (event.target.tagName === "A" && event.target.className !== "active") {
			console.log(event.target);
			linkActive.classList.remove("active");
			document.querySelector(linkActive.hash).style.display="none";
			linkActive = event.target;
			linkActive.classList.add("active");
			document.querySelector(linkActive.hash).style.display="block";
		}

		return false;
	}
}
