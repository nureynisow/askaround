<?php
	include 'inc_bdd.php';
	$req = $bdd->query("SELECT * FROM `question`");
	//var_dump($req);
	echo '<table class="table table-stripped">';	
	while($data = $req->fetch()){
		echo "<tr>
				<td>
					<h3>
						<a style=\"text-decoration:none\" href=\"index.php?task=viewQ&q=".$data['idQ']."\">".ucfirst($data['titre'])."</a>
					</h3>
				</td>";
		echo "<td>
			<span style=\"margin-left:30px\"><i><b>posted</b> : ".$data['dateQ']."</i> by <a href=\"index.php?user=\"".$data['pseudo'].">".$data['pseudo']."</a>
			</span></td>";
			$nbrep = $bdd->query("SELECT COUNT( idR ) FROM reponse WHERE idQ =".intval($data['idQ']));
			$nbrep = $nbrep->fetch();
			$nbrep = $nbrep[0];
			echo "<td>$nbrep Answers</td>";
		echo "</tr>";
	}
?>