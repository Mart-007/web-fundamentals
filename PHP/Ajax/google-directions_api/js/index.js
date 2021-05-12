$(document).ready(function(){

	$(".direction").hide();
	
	$("form").submit(function(e){
		e.preventDefault();
		$(".direction").html("");
		var origin = $("#origin").val();
		var destination = $("#destination").val();
		$.post("maps/direction", {origin:origin, destination:destination}, function(data){
			$.get(data, function(directions){
				directions.route.legs[0].maneuvers.forEach(item => {
					$(".direction").slideDown();
					$(".direction").append(`<li>${item.narrative}</li>`)
				})
			})
		});
		$("#origin").val("");
		$("#destination").val("");
		return false;
	})

	
})