<?php
	include '../func/connectSql.php';
	$bd=connectSql();
	/*random an array of the numbers*/
	$sumAll=$_POST["sumAll"];
	$positions=range(1, $sumAll);
	shuffle($positions);

	$counter=0;

	$sumWerewolves=$_POST["sumWerewolves"];
	for ($i=1;$i<=$sumWerewolves;$i++){
		$name='werewolf'.$i;
		$sql="update roles set used=1,pos=$positions[$counter] where name='$name';";
		$vQuery=mysqli_query($bd, $sql);
		$counter++;
	}
	$sumTownsfolks=$_POST["sumTownsfolks"];
	for ($i=1;$i<=$sumTownsfolks;$i++){
		$name='townsfolk'.$i;
		$sql="update roles set used=1,pos=$positions[$counter] where name='$name';";
		$vQuery=mysqli_query($bd, $sql);
		$counter++;
	}

	if ( isset($_POST["usedProphet"]) ){
		$sql="update roles set used=1,pos=$positions[$counter] where name='prophet';";
		$vQuery=mysqli_query($bd, $sql);
		$counter++;
	}
		
	if ( isset($_POST["usedWitch"]) ){
		$sql="update roles set used=1,pos=$positions[$counter] where name='witch';";
		$vQuery=mysqli_query($bd, $sql);
		$counter++;
	}
	
	if ( isset($_POST["usedSavior"]) ){
		$sql="update roles set used=1,pos=$positions[$counter] where name='savior';";
		$vQuery=mysqli_query($bd, $sql);
		$counter++;
	}
	
	if ( isset($_POST["usedHunter"]) ){
		$sql="update roles set used=1,pos=$positions[$counter] where name='hunter';";
		$vQuery=mysqli_query($bd, $sql);
		$counter++;
	}
	
	if ( isset($_POST["usedIdiot"]) ){
		$sql="update roles set used=1,pos=$positions[$counter] where name='idiot';";
		$vQuery=mysqli_query($bd, $sql);
		$counter++;
	}
	
	if ( isset($_POST["usedCupido"]) ){
		$sql="update roles set used=1,pos=$positions[$counter] where name='cupido';";
		$vQuery=mysqli_query($bd, $sql);
		$counter++;
	}
	
	if ( isset($_POST["usedWwerewolf"]) ){
		$sql="update roles set used=1,pos=$positions[$counter] where name='white werewolf';";
		$vQuery=mysqli_query($bd, $sql);
		$counter++;
	}
	
	if ( isset($_POST["usedThief"]) ){
		$sql="update roles set used=1,pos=$positions[$counter] where name='thief';";
		$vQuery=mysqli_query($bd, $sql);
		$counter++;
	}
	
	$sql="select count(*) as totol from roles where used=1";
	$vQuery=mysqli_query($bd, $sql);
	$row = mysqli_fetch_array($vQuery, MYSQLI_ASSOC);    
	
	if ( $row['totol'] == $sumAll )
		echo OK;
	else
		echo KO;
?>