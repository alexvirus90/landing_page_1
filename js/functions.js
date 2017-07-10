const DELAY = 500;

$(document).ready(function() {
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

});