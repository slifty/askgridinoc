$(function() {
	$("#answer").hide();
	
	$("#askbutton").click(function() {
		$("#questionform").submit();
	});
	
	$("#questionform").submit(function() {
		if($("#topic").val().length < 2)
			return;
		
		
		$("#container").hide();
		var answer = $("#topic").val().charCodeAt(1) % 4;
		
		$("#tdisplay").html($("#topic").val()+"?");
		switch(answer) {
			case 0:
				$("#response").html("It's bullshit");
				break;
			case 1:
				$("#response").html("It's ok");
				break;
			case 2:
				$("#response").html("It's awesome");
				break;
			case 3:
				$("#response").html("Meh");
				break;
		}
		$("body").addClass("loading");
		setTimeout(function() {
			$("#container").show();
			$("#question").hide();
			$("#answer").show();
			$("body").removeClass("loading");
		}, 1000 + Math.random() * 3000);
		return false;
	});
	
	$("#askagainbutton").click(function() {
		$("#topic").val("");
		$("#question").show();
		$("#answer").hide();
	});
});
