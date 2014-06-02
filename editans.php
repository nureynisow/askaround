<?php
	//var_dump($_GET);
	//session_start();
	$r=$_GET['rep'];
	var_dump($_POST['rep']);
	include 'inc_bdd.php';
	$req = $bdd->query("UPDATE reponse set reponse='".$_POST['rep']."' WHERE idR=$r");

		if($req)header("Location: index.php");
		var_dump($req);

?>