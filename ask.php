<?php
session_start();
	var_dump($_POST);
	include 'inc_bdd.php';
	$title = $_POST['title'];
	$question = $_POST['question'];
	$tag = $_POST['tags'];
	$pseudo = $_SESSION['pseudo'];
	$req = $bdd->exec("INSERT INTO `ask`.`question` (`idQ`, `dateQ`, `titre`, `question`, `pseudo`) 
		VALUES (NULL, curdate(), '$title', '$question', '$pseudo')");
	header('Location: index.php');
?>