<?php
session_start();
var_dump($_POST);
include 'inc_bdd.php';
$username = $_POST['username'];
$mdp = sha1($_POST['pwd']);
$req = $bdd->query("SELECT `pseudo`,`mdp`,`nomcomplet` FROM `user` WHERE `pseudo` = '$username' AND `mdp` = '$mdp'");
var_dump($req);
$data = $req->fetch();
if(!$data){
	$_SESSION['warn'] = "/!\\ Params authentification incorrect";
	header('Location: index.php');
	echo "erreur pass";
}else{
	$_SESSION['pseudo'] = $data['pseudo'];
	$_SESSION['mdp'] = $data['mdp'];
	$_SESSION['nomC'] = $data['nomcomplet'];
	header('Location: index.php');
}

?>