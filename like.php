<?php
	session_start();
	include 'inc_bdd.php';
	$q = intval($_GET['q']);
	$rep = intval($_GET['rep']);
	$pseudo = $_SESSION['pseudo'];
	$req = $bdd->exec("INSERT IGNORE INTO  `ask`.`vote`
										VALUES ('$rep',  '$pseudo')");
	
		header("Location: index.php?task=viewQ&q=$q");
	echo "erreur<br>";
	var_dump($req);

?>