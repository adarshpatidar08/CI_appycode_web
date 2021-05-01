
	document.addEventListener("DOMContentLoaded", function () {
		window.addEventListener('scroll', function () {
			if (window.scrollY > 80) {
				document.getElementById('header').classList.add('sticky');
			} else {
				document.getElementById('header').classList.remove('sticky');
			}
		});
	}); 