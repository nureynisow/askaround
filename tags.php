<?php
	include 'inc_bdd.php';
	echo "<center><h1> All Tags </h1></center>";
	$req = $bdd->query('SELECT * FROM `tags` order by `tag`');
	while($data = $req->fetch()){
		$tag = $data[0];
		$cardtag = $bdd->query("SELECT COUNT(tag) FROM `question_tag` where `tag`='$tag'");
		$cardtag = $cardtag->fetch();
		$cardtag = $cardtag[0];
		
		echo "<a href=\"index.php?task=tags&tag=$tag\" style=\"text-decoration:none\"><span style=\"font-size : 16px\" class=\"label label-info\">$tag <span class=\"badge\">$cardtag</span></span></a> ";
	}
?>