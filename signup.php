<?php
	include 'inc_bdd.php';
	//var_dump($_POST);
	$pseudo = $_POST['pseudo'];
	$email = $_POST['email'];
	$nomC = $_POST['nom'].' '.$_POST['prenom'];
	$nomC = strtoupper($nomC);
	$pwd = sha1($_POST['pwd']);

	$bdd->exec("INSERT INTO `user` values('$pseudo','$email','$nomC','$pwd')")
		or die(print_r($bdd->errorInfo(),true));
	echo "<center><h4> Please check your inbox to activate your account</h4>
					<h5>Any issues contact <a href=\"mailto:nureynisow@gmail.com\"> ADMIN </a></h5>
			</center>";
	echo "<h2> >>> Redirection to home : 10 seconds </h2> or <a href=\"index.php\">click here</a>";
	//if(mail($email,'[XLFG]',"activate your account via the code = $actif"))
		header("Refresh: 5; url=index.php");

?>