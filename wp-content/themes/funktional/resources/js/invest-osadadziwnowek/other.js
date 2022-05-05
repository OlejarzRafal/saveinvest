
//STICKY

window.onscroll = function() {
	stickyFrontPage()
};
var navbar = document.querySelector('.header__content');

function stickyFrontPage() {
	if (window.pageYOffset > 1) {
	  navbar.classList.add("sticky")
	} else {
	  navbar.classList.remove("sticky");
	}
  }

// Scroll down btn

const scrollBtn = document.getElementById('scroll-down-btn');
if (scrollBtn) {
	scrollBtn.addEventListener('click', function() {
		const startPostition = window.pageYOffset;
		const heroHeight = document.querySelector('.hero').offsetHeight;
		let targetPosition = heroHeight + 1;
		let distance = targetPosition - startPostition;
		let startTime = null;
		let duration = 750;

		function animation(currentTime) {
			if (startTime === null) startTime = currentTime;
			let timeElapsed = currentTime - startTime;
			let run = ease(timeElapsed, startPostition, distance, duration);
			window.scrollTo(0, run);
			if (timeElapsed < duration) requestAnimationFrame(animation);
		}

		function ease(t, b, c, d) {
			t /= d / 2;
			if (t < 1) return c / 2 * t * t + b;
			t--;
			return -c / 2 * (t * (t - 2) - 1) + b;
		}

		requestAnimationFrame(animation);
	});
}

// Hamburger menu

// const button = document.getElementById('menu-btn');
// const menu = document.getElementById('main-menu');
// button.addEventListener('click', function() {
// 	if (button.classList.contains('header__hamburger--opened') == false) {
// 		button.classList.add('header__hamburger--opened');
// 		menu.classList.add('header__menu--opened');
// 	} else {
// 		button.classList.remove('header__hamburger--opened');
// 		menu.classList.remove('header__menu--opened');
// 	}
// });

// if (document.querySelector('.category')) {
// 	var cat = document.querySelector('.category');
// 	var catItems = cat.querySelectorAll('.category__item');

// 	catItems[0].addEventListener('click', function() {
// 		filterSelection('all');
// 	});
// 	catItems[1].addEventListener('click', function() {
// 		filterSelection('picture');
// 	});
// 	catItems[2].addEventListener('click', function() {
// 		filterSelection('visualization');
// 	});
// 	catItems[3].addEventListener('click', function() {
// 		filterSelection('video');
// 	});

// 	filterSelection('all');
// 	function filterSelection(c) {
// 		var x, i;
// 		x = document.getElementsByClassName('gallery__item');
// 		if (c == 'all') c = '';
// 		for (i = 0; i < x.length; i++) {
// 			removeClass(x[i], 'show');
// 			if (x[i].className.indexOf(c) > -1) addClass(x[i], 'show');
// 		}
// 	}

// 	function addClass(element, name) {
// 		var i, arr1, arr2;
// 		arr1 = element.className.split(' ');
// 		arr2 = name.split(' ');
// 		for (i = 0; i < arr2.length; i++) {
// 			if (arr1.indexOf(arr2[i]) == -1) {
// 				element.className += ' ' + arr2[i];
// 			}
// 		}
// 	}

// 	function removeClass(element, name) {
// 		var i, arr1, arr2;
// 		arr1 = element.className.split(' ');
// 		arr2 = name.split(' ');
// 		for (i = 0; i < arr2.length; i++) {
// 			while (arr1.indexOf(arr2[i]) > -1) {
// 				arr1.splice(arr1.indexOf(arr2[i]), 1);
// 			}
// 		}
// 		element.className = arr1.join(' ');
// 	}

// 	for (var i = 0; i < catItems.length; i++) {
// 		catItems[i].addEventListener('click', function() {
// 			var current = document.getElementsByClassName('active');
// 			current[0].className = current[0].className.replace(' active', '');
// 			this.className += ' active';
// 		});
// 	}
// }
