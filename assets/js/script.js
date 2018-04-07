
$(document).ready(function(){
	var currentPosition = 0;
	var slideWidth = $("#slidesContainer").width();
	var slides = $('.slide');
	var numberOfSlides = slides.length;

	$('#slidesContainer').css('overflow', 'hidden');
	slides.wrapAll('<div id="slideInner"></div>').css({
			'float' : 'left',
			'width' : slideWidth
	});
	$('#slideInner').css('width', slideWidth * numberOfSlides);
	$('#slidesContainer .slide, #special_offer .control').removeClass("hidden");
	manageControls(currentPosition);
	$('.control').bind('click', function(){
			// Определение новой позиции
			currentPosition = ($(this).attr('id')=='rightControl')
				? currentPosition+1 : currentPosition-1;
			// Прячет / показывает элементы контроля
			manageControls(currentPosition);
			// Move slideInner using margin-left
			$('#slideInner').animate({
				'marginLeft' : slideWidth*(-currentPosition)
			});
		});

});
function manageControls(position){
	// Спрятать левую стрелку, если это левый слайд
	if(position==0){ $('#leftControl').hide() }
	else{ $('#leftControl').show() }
	// Спрятать правую стрелку, если это последний слайд
	if(position==numberOfSlides-1){ $('#rightControl').hide() }
	else{ $('#rightControl').show() }
}
