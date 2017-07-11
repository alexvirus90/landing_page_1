const DELAY = 500;

$(document).ready(function() {

	//Исправление бага со сдвигом фиксированного меню
	$("#menu, body").css("width", $(window).width() + "px");

	$(window).on("resize", function() {
		$("#menu, body").css("width", $(window).width() + "px");
	});

	//Плавный переход через меню по сайту
	$("#menu a:not(a.order)").on("click", function() {
		$("html, body").stop().animate({
			scrollTop: $($(this).attr("href")).offset().top /*- $("#menu").innerHeight()*/
		}, DELAY);
	});

	//Попап менеджер FancyBox
	//Документация: http://fancybox.net/howto
	//<a class="fancybox"><img src="image.jpg" /></a>
	//<a class="fancybox" data-fancybox-group="group"><img src="image.jpg" /></a>
	$(".site a").fancybox({
		'minWidth'  : 900
	});

	$("#popup_close img").on("click", function() {
		$("#parent_popup").hide(DELAY);
	});

	$(".button, #menu a.order").on("click", function() {
		$("#parent_popup").show(DELAY);
		return false;
	});

	//https://github.com/RobinHerbots/Inputmask
	$("input[type='text']").inputmask({"mask": "+7 (999) 999-99-99"});

	$("form").on("submit", function() {
		var phone = $("input[type='text']").val();
		var regex = /\+7 \(\d{3}\) \d{3}\-\d{2}\-\d{2}/;
		if (phone.search(regex) == -1) {
			alert("Укажите правильный номер телефона!");
			return false;
		}
		return true;
	});

	//https://github.com/matthieua/WOW
	var wow = new WOW();
	wow.init();

});