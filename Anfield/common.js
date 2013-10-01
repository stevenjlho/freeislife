


$(document).ready(function() {
	//tab
	$("#tab_title ul li:first").addClass("active");
	$("#tab_title li").click(function() {
		$("#tab_title li").removeClass("active");
		$(this).addClass("active");
		$(this).find("")
		$("."+$(this).attr("id")).animate({
			height:"toggle",
			opacity:"toggle"
		}, 800).siblings().hide();
	});
});