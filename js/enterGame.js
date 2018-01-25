$(document).ready(function(){
	$('#help').text('');
	$("#enterGame").attr('disabled','disabled');

	$("#positions").change(function () {
		if ( $("#positions").val() != "位置" )
			$("#enterGame").removeAttr('disabled');
		else
			$("#enterGame").attr('disabled','disabled');
	});

	$("#deleteGame").click(function () {
		$('#help').text('');
		$.ajax({
			url: "func/deleteGame.php"
		})
		.fail(function() {
			$('#help').text('错误');
		})
		.done(function(){	
			$('#help').text('游戏已删除');
			$("#createGame").removeAttr('disabled');
			$("#deleteGame").attr('disabled','disabled');
		});
	});

	$("#createGame").click(function () {
		$(location).attr('href',"createGame.php");
	});

	$("#enterGame").click(function () {
		$('#help').text('');
		var posCheck=$("#positions").val();
		$.ajax({
			type: 'POST',
			url: "func/checkPosEntred.php",
			data: {pos:$("#positions").val()}
		})
		.fail(function() {
			$('#help').text('错误');
		})
		.done(function(data){
			idQ = $.parseJSON(data);	
		});
		//$("#enterGameForm").submit();
	});
});

