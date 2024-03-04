var slideIndex = 1;
		var timer = null;
		showSlides(slideIndex);

		function plusSlides(n) {
			clearInterval(timer);
			showSlides(slideIndex += n);
			timer = setInterval(function() {
				plusSlides(1);
			}, 4000); // Change image every 4 seconds
		}

		function currentSlide(n) {
			clearInterval(timer);
			showSlides(slideIndex = n);
			timer = setInterval(function() {
				plusSlides(1);
			}, 4000); // Change image every 4 seconds
		}

		function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			if (n > slides.length) {
				slideIndex = 1
			}
			if (n < 1) {
				slideIndex = slides.length
			}
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
      }
			slides[slideIndex-1].style.display = "block";
		}
		timer = setInterval(function() {
			plusSlides(1);
		}, 4000); // Change image every 4 seconds

		const slideshow = document.getElementById("slideshow");
		const images = slideshow.getElementsByTagName("img");
		let currentIndex = 0;

		function changeBackgroundImage() {
			document.body.style.backgroundImage = `url(${images[currentIndex].src})`;
		}

		function nextImage() {
			images[currentIndex].classList.remove("active");
			currentIndex = (currentIndex + 1) % images.length;
			images[currentIndex].classList.add("active");
			changeBackgroundImage();
		}


