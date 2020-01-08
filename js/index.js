$(document).ready(function(){

//alert('Este sitio abrira sus clicks el dia 7 deagosto de 2019.Si desea crear su cuenta puede hacerlo ahora mismo.');
  var imgItems = $('.li').length;

  var imgPos =1;
  for (var i = 1; i <=imgItems; i++) {
  	 $('.paginacion').append('<li><span class="fa fa-circle"></span></li>');
  }

  $('.li').hide();
  $('.li:first').show();
  $('.paginacion li:first').css({'color': 'orange'});
//-------------------------------------------------
//            LLAMADOS A FUNCIONES

$('.paginacion li').click(paginacion);
$('.right span').click(nextSlider);
$('.left span').click(prevSlider);

// DEFINICION DE FUNCIONES ***********

function paginacion(){
	var paginacionPos = $(this).index() +1;

    $('.li').hide();
    $('.li:nth-child('+paginacionPos).fadeIn();

    $('.paginacion li').css({'color':'#858585'});

    $(this).css({'color':'orange'});
    imgPos = paginacionPos;
};

function nextSlider(){
	
	if (imgPos >=imgItems) {
		imgPos = 1;
}else{
	imgPos++;
}
	$('.paginacion li').css({'color':'#858585'});
	$('.paginacion li:nth-child('+imgPos+')').css({'color':'orange'});

    $('.li').hide();
	$('.li:nth-child('+imgPos).fadeIn();
  };



function prevSlider(){

	
	if (imgPos <=1) {
		imgPos = imgItems;
}else{
	imgPos--;
}
	$('.paginacion li').css({'color':'#858585'});
	$('.paginacion li:nth-child('+imgPos+')').css({'color':'orange'});

    $('.li').hide();
	$('.li:nth-child('+imgPos+')').fadeIn();
  }
setInterval(function(){
	nextSlider();

}, 8000);

//       MUESTRA Y OCULTA LA INFO DEL FOOTER   *****

var contpre = 1;
$('.pre-footer').hide();
$('.btn-pre').click(prefooter);

function prefooter(){

  if (contpre == 1) {
    $('.pre-footer').show();
    
  }
  if (contpre != 1) {
   $('.pre-footer').hide();
   contpre=0;
  }
  contpre++;
  
 
}

//            ubicacion en CARD      -----|

$('.card').mouseover(ubicacionHover);
$('.card').mouseout(ubicacionLeave);
function ubicacionHover(){
  var tarjeta = $(this).index()+1;
  var ubicacioIndex = $('.card-descripcion', this).css({'display':'block'});}

function ubicacionLeave(){
  var tarjeta = $(this).index()+1;
  var ubicacioIndex = $('.card-descripcion', this).css({'display':'none'});}

});


