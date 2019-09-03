$(document).ready(function() {
	
	$("#nav-1").click(function(e) {
		$("#cv").addClass("visible");
	});
	
	$("#cv-back").click(function(e) {
		$("#cv").removeClass("visible");
	});
	
	$("#nav-2").click(function(e) {
		$(".alinea").removeClass("visible");
		$(".image").removeClass("hidden");
	});
	
	$("#nav-3").click(function(e) {
		console.log("OK");
		$(".alinea").addClass("visible");
		$(".image").addClass("hidden");
	});
	
	$("#nav-4").click(function(e) {
		$("#contact").addClass("visible");
	});
	
	$("#contact-back").click(function(e) {
		$("#contact").removeClass("visible");
	});

});