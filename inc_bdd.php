<?php
	$bdd = NULL;
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=ask','root','$');
	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}
?>