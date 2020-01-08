var slideIndex = 0;
showSlides();

function plusSlides(num){
  slideIndex = slideIndex + num;
  //showSlides();

}

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1} 
  slides[slideIndex-1].style.display = "block"; 
  setTimeout(showSlides,10000); // cambia cada 10 segundos
}

//***********************************************************
var contador=1;

function showPreFooter(){
	
	var preFooter = document.getElementsByClassName("pre-footer");
  if (contador%2==0){

	preFooter[0].style.display = "none";
	contador++;
}else{
	preFooter[0].style.display = "block";
	contador++;
}
}
