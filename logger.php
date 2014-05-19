<?php
session_start();
$bdd = NULL;
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=ask','root','$');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
var_dump($_POST);
$username = $_POST['username'];
$mdp = $_POST['pwd'];
$req = $bdd->query("SELECT `pseudo`,`mdp`,`nomComplet` FROM `user` WHERE `pseudo` = '$username' AND `mdp` = '$mdp'");
//var_dump($req);
$data = $req->fetch();
if(!$data){
	$_SESSION['warn'] = "/!\\ Params authentification incorrect";
	header('Location: index.php');

}
$_SESSION['login'] = $data['pseudo'];
$_SESSION['mdp'] = $data['mdp'];
$_SESSION['nomC'] = $data['nomComplet'];
header('Location: index.php');


?>