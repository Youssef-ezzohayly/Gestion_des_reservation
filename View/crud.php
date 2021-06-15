<?php
    include '../classes/connexion.php';

	// Create connection
	$con = new mysqli($localhost, $user, $passwd, $database);
	// Check connection
	if ($con->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

    if(isset($_POST["new_reservation"])){
    	$Nchambre = $_POST['input_nb_chambres'];
    	$Nchambre = $_POST['input_nb_chambres'];
	    $NbrEnfant = $_POST['input_nb_enfants'];

	    //id de client doit etre recuppere apres que l auth soit effectuer
	    $idCient = 1;

	    $ChoixPension = $_POST['ChoixPension'];
	    if(str_contains($ChoixPension,"demi") && isset($_POST['mySelect'])){
	    	$pension = $_POST['mySelect'];
	    }else if(str_contains($ChoixPension,"sans")){
	    	$pension = "sans pension";
	    }else{
	    	$pension = "pension complete";
	    }

	    echo $Nchambre." - ".$NbrEnfant." - ".$ChoixPension." - ".$pension;
    	$rslt = $con->query("INSERT INTO reservations VALUES (null,'".$pension."','".$ChoixPension."',".$NbrEnfant.",".$idCient.",".$Nchambre.")");
    }

    header("Location: ./reservation.php?resv=".$con->insert_id);
	

?>