document.querySelectorAll(".modal-button").forEach(function(el) {
	el.addEventListener("click", function() {
		var target = document.querySelector(el.getAttribute("data-target"));

		target.classList.add("is-active");

		// target
		// 	.querySelectorAll(".modal-close, .modal-background")
		// 	.addEventListener("click", function() {
		// 		target.classList.remove("is-active");
		// 	});
		// how to do multiple selectors??

		target.querySelector('.modal-close').addEventListener('click', function () {
		  target.classList.remove('is-active');
		});

		target.querySelector('.modal-background').addEventListener('click', function () {
		  target.classList.remove('is-active');
		});
	});
});
