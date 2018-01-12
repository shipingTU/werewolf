<?php
	include 'func/base.php';
	/*$i=0;
	$bd=connectSql();
	$sql="select pos from roles where used=1 and entred!=1 order by pos asc";
	$vQuery=mysqli_query($bd, $sql);
    if ( $vQuery ) {
    	while($row = mysqli_fetch_array($vQuery, MYSQLI_ASSOC)) {
        	$pos[$i]=$row['pos'];
			$i++;
        }      
    }
    mysqli_close($bd);
    echo json_encode($pos);*/
    $pos=$_POST['pos'];
    $bd=connectSql();
    
?>