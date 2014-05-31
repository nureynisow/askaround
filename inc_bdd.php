<?php
	$bdd = NULL;
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=ask','root','$');
	}
	catch (Exception $e)
	{
			echo "<h1>ERREUR</h1>";
	        die('Erreur : ' . $e->getMessage());
	}
?>