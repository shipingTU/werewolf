$(document).ready(function(){
	var sum=3;
	$("#sumAll").val(sum);

	$("input").change(function () {
		sum=0;
		sum+=parseInt($("input[name=sumWerewolves]:checked").val(),10);
		sum+=parseInt($("input[name=sumTownsfolks]:checked").val(),10);
		if ( $("#usedProphet").is(':checked') )
			sum++;
		if ( $("#usedWitch").is(':checked') )
			sum++;
		if ( $("#usedSavior").is(':checked') )
			sum++;
		if ( $("#usedHunter").is(':checked') )
			sum++;
		if ( $("#usedIdiot").is(':checked') )
			sum++;
		if ( $("#usedCupido").is(':checked') )
			sum++;
		if ( $("#usedWwerewolf").is(':checked') )
			sum++;
		if ( $("#usedThief").is(':checked') )
			sum++;
		$("#sumAll").val(sum);
	});

	/*$("#createGame").click(function () {
		if ( $("#usedProphet").is(':checked') )
			$("#usedProphetVal").val("1");
		else
			$("#usedProphetVal").val("0");
		if ( $("#usedWitch").is(':checked') )
			$("#usedWitchVal").val("1");
		else
			$("#usedWitchVal").val("0");
		if ( $("#usedSavior").is(':checked') )
			$("#usedSaviorVal").val("1");
		else
			$("#usedSaviorVal").val("0");
		if ( $("#usedHunter").is(':checked') )
			$("#usedHunterVal").val("1");
		else
			$("#usedHunterVal").val("0");
		if ( $("#usedIdiot").is(':checked') )
			$("#usedIdiotVal").val("1");
		else
			$("#usedIdiotVal").val("0");
		if ( $("#usedCupido").is(':checked') )
			$("#usedCupidoVal").val("1");
		else
			$("#usedCupidoVal").val("0");
		if ( $("#usedWwerewolf").is(':checked') )
			$("#usedWwerewolfVal").val("1");
		else
			$("#usedWwerewolfVal").val("0");
		if ( $("#usedThief").is(':checked') )
			$("#usedThiefVal").val("1");
		else
			$("#usedThiefVal").val("0");
		$("#sumAllVal").val($("#sumAll").val());
		$("#gameForm").submit();
	});*/
});

