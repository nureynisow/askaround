<?php
session_start();
	//var_dump($_POST);
	include 'inc_bdd.php';
	$title = $_POST['title'];
	$question = addslashes($_POST['question']);
	$tag = $_POST['tags'];
	$pseudo = $_SESSION['pseudo'];
	$req = $bdd->exec("INSERT INTO `question` (`idQ`,`dateQ`, `titre`, `question`, `pseudo`) 
		VALUES (NULL,curdate(), '$title', '$question', '$pseudo')");
	echo "$question";
	if(!$req)
		die();

	$id = $bdd->lastInsertId();
	$tags = explode(";", $tag);
	

	var_dump($req);

	foreach ($tags as $tag) {
		$tag = strtoupper($tag);
		$bdd->exec("INSERT IGNORE INTO `ask`.`tags` VALUES ('$tag')");
		$bdd->exec("INSERT INTO `ask`.`question_tag` VALUES ('$id','$tag')");
	}

	var_dump($tags);
	header('Location: index.php');
?>