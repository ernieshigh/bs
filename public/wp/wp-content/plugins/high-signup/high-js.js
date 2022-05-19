/**
	*
	* Some JS for scroll
	*
**/

function hide_form(){ 
 
		document.getElementById("scroll-block").classList.add("hidden");
}

document.addEventListener('DOMContentLoaded', function() {
	 
	window.addEventListener('scroll', function() { 
		var top =	 window.pageYOffset || document.documentElement.scrollTop;
			if (top > 100) {
				document.getElementById("scroll-block").style.display = "block";
			} else {
				document.getElementById("scroll-block").style.display = "none";
			}
		 
	});
	
	
	  document.forms['add_user'].addEventListener('submit', function (event) {  
			document.getElementsByClassName('high-form-wrap').removeAttribute('id');
            event.preventDefault(); 
        });


})