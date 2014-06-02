<?php
	//var_dump($_GET);
	//session_start();
	include 'inc_bdd.php';
	$req = $bdd->query("SELECT `reponse` FROM `reponse` where idR=".$_GET['rep']);
	$data = $req->fetch();
	$r=$_GET['rep']
	?>
	<h1>Edit this answer</h1>
	<?php echo '<form method="post" action="editans.php?rep='.$r.'" role="form">';?>
		<textarea name="rep" class="form-control" required style="height:250px; width:420px;resize:none"><?php echo $data[0];?></textarea>
		<br><input type="submit" class="btn btn-success" value="submit">
	</form>
	