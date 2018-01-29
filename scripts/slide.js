var slideIndex = 1;
showSlidesManuel(slideIndex);

function plusSlide(n){
	showSlidesManuel(slideIndex += n);
}

function currentSlide(n) {
	showSlidesManuel(slideIndex = n);
}

function showSlidesManuel(n) {
	var i;
	var slide = document.getElementsByClassName("slideFade");
	var dots = document.getElementsByClassName("dots");
	if (n > slide.length) {
		slideIndex = 1;
	}
	if (n < 1) {
		slideIndex = slide.length;
	}
	for (i = 0; i < slide.length; i++) {
      slide[i].style.display = "none";  
	}
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active","");
	}
	
	slide[slideIndex-1].style.display = "block";
	dots[slideIndex-1].className += " active";
}

var slideIndexAuto = 0;

showSlidesAuto();

function showSlidesAuto() {
	var i;
	var slide = document.getElementsByClassName("slideFade");
	var dots = document.getElementsByClassName("dots");
	for( i = 0; i < slide.length; i++ ) {
		slide[i].style.display = "none";
	}
	slideIndexAuto++;
	if (slideIndexAuto > slide.length) {
		slideIndexAuto = 1;
	}
	for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
	slide[slideIndexAuto-1].style.display = "block";
	dots[slideIndexAuto-1].className += " active";
	setTimeout(showSlidesAuto, 10000);
}