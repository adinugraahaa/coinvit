$(document).ready(function() {
	// $("#btn2").click(function() {
	// 	$(this).css("background-color", "#f69022");
	// 	$(this).css("color", "#111111");
	// 	$
	// 	$("#btn").css("background-color", "#111111");
	// 	$("btn").css("color", "#f69022");


	// })
	$(".btn2").click(function() {
	$(this).addClass("btn21").removeClass("btn2");
	$(".btn1").addClass("btn12").removeClass("btn1");
	})

	$(".btn1").click(function() {
	$(this).addClass("btn1").removeClass("btn12");
	$(".btn21").addClass("btn2").removeClass("btn21");
	})
})