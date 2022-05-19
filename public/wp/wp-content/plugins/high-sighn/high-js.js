/**
	*
	* Some JS for scroll
	*
**/

document.addEventListener('DOMContentLoaded', function() {
	 
	window.addEventListener('scroll', function() { 
		var top =	 window.pageYOffset || document.documentElement.scrollTop;
			if (top > 100) {
				document.getElementById("scroll-block").style.display = "block";
			} else {
				document.getElementById("scroll-block").style.display = "none";
			}
		 
	});


})