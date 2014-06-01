<?php
	include 'inc_bdd.php';
	$id = intval($_GET['q']);
	$bdd->exec("DELETE FROM `question_tag` WHERE `idQ` ='$id'");
	$req = $bdd->exec("DELETE FROM `question` WHERE `idQ` ='$id'");
	
	var_dump($req);
	//header("Location: index.php");
?>