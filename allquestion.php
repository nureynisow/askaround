<?php
	include 'inc_bdd.php';
	$req = $bdd->query('SELECT * FROM `question`');
	//var_dump($req);
	while($data = $req->fetch()){
		echo "<h3><a style=\"text-decoration:none\" href=\"index.php?task=viewQ&q=".$data['idQ']."\">".ucfirst($data['titre'])."</a></h3>";
		echo "<span style=\"margin-left:30px\"><i><b>posted</b> : ".$data['dateQ']."</i> by <a href=\"index.php?user=\"".$data['pseudo'].">".$data['pseudo']."</a></span>";
	echo "<hr>";
	}
?>