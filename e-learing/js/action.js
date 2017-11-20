$( document ).ready(function(){

	$("#more").click(function(){
		$(".intro").attr("style", "dispay: block;");
	});

	$("#close_about").click(function(){
		$(".intro").hide();
	});

})
