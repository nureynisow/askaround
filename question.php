
<?php

	include 'inc_bdd.php';
	$id = intval($_GET['q']);
	$req = $bdd->query("SELECT * FROM `question` where `idQ` = $id");
	//var_dump($req);
	$data = $req->fetch();
		echo "<h3>".$data['titre']."</h3>";
		echo "posted ".$data['dateQ']." by <a href=\"index.php?task=viewU&user=".$data['pseudo']."\">".$data['pseudo']."</a>";
		echo "<hr>";
		echo "<textarea style=\"resize:none\" disabled>";
			echo $data['question'];
		echo "</textarea>";
	
?>