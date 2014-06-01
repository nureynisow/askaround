<h1> EDIT YOUR QUESTION </h1>
<?php
	include 'inc_bdd.php';
	$id = intval($_GET['q']);
	$req = $bdd->query("SELECT * FROM `question` where `idQ` = $id");
	//var_dump($req);
	$data = $req->fetch();
		echo "<form method=\"POST\" action=\"editQact.php?q=$id\" role=\"form\">";
		echo "<input name=\"title\" type=\"text\" value=\"".$data['titre']."\" class=\"form-control\">";
		
		echo "<hr>";
		echo '<textarea class=\"form-control\" name="question" rows="3" style="height:250px; width:520px;resize:none">';
			echo $data['question'];
		echo "</textarea>";
		echo '<br><input type="submit" value="Edit it !" class="btn btn-large btn-primary"/>';
		echo "</form>";
	
	
?>