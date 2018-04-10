var $horizontalTabs = $(".horizontal-tabs");
var $verticalTabs = $(".vertical-tabs");
var $openMenu = $(".open-menu");
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
	function manageControls(position){
		// Спрятать левую стрелку, если это левый слайд
		if(position==0){ $('#leftControl').hide() }
		else{ $('#leftControl').show() }
		// Спрятать правую стрелку, если это последний слайд
		if(position==numberOfSlides-1){ $('#rightControl').hide() }
		else{ $('#rightControl').show() }
	}
	$horizontalTabs.find(".item-tab.active").trigger("click");


	$horizontalTabs.on("click", ".item-tab", function(){
		$horizontalTabs.find(".tab-content, .item-tab").removeClass("active");
		var $this = $(this);
		$this.addClass("active");
		var dataTab = $this.attr("id");
		$horizontalTabs.find(".tab-content[data-tab='"+dataTab+"']").addClass("active");
	});
	$verticalTabs.on("click", ".item-tab", function(){
		$verticalTabs.find(".tab-content, .item-tab").removeClass("active");
		var $this = $(this);
		$this.addClass("active");
		var dataTab = $this.attr("id");
		$verticalTabs.find(".tab-content[data-tab='"+dataTab+"']").addClass("active");
	});

	$openMenu.click(function(){
		$(".site-menu").toggleClass("hidden-xs");
	});
});
