<?php
session_start();
$pseudo = $_SESSION['pseudo'];
	var_dump($_GET);
	echo "<hr>";
	var_dump($_POST);
	$q = intval($_GET['q']);
	$rep = $_POST['reponse'];
	include 'inc_bdd.php';
	$req = $bdd->exec("INSERT INTO reponse values(NULL,$q,curdate(),'$rep','$pseudo')");
	header("Location: index.php?task=viewQ&q=$q");
?>