<?php
	session_start();
	var_dump($_POST);
	include 'inc_bdd.php';
	$title = $_POST['title'];
	$question = $_POST['question'];
	$id=intval($_GET['q']);
	$req = $bdd->exec("UPDATE  `ask`.`question` SET  
			`titre` =  '$title',
			`question` =  '$question', 
			`dateQ`=curdate() 
					WHERE  `question`.`idQ` =$id;");
	if($req)
		header("Location: index.php?task=viewQ&q=$id");
	var_dump($req);
?>