$(document).ready(function(){
	//Canvas Stuff
	
	var canvas = $("#canvas")[0];
	var ctx = canvas.getContext("2d");
	var w = $("#canvas").width();
	var h = $("#canvas").height();
	
	//painting canvas
	ctx.fillStyle = "green";
	ctx.fillRect(0,0, w, h);
	ctx.strokeStyle = "black";
	ctx.strokeRect(0,0, w, h);
	
	$("#deal").click(function(){
		$("#deal").remove();
		
	});
});