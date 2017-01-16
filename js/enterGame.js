$(document).ready(function(){
	$("#enterGame").attr('disabled','disabled');

	$("#positions").change(function () {
		if ( $("#positions").val() != "" )
			$("#enterGame").removeAttr('disabled');
		else
			$("#enterGame").attr('disabled','disabled');
	});

	$("#enterGame").click(function () {
		var posCheck=$("#positions").val();
		$.ajax({
			type: 'POST',
			url: "checkPosEntred.php",
			data: {}
		})
		.fail(function() {
			alert( "error" );
		})
		.done(function(data){
			idQ = $.parseJSON(data);	
		});
		$("#enterGameForm").submit();
	});
	
});

