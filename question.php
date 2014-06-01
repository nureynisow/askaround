
<?php

	include 'inc_bdd.php';
	$id = intval($_GET['q']);
	$req = $bdd->query("SELECT * FROM `question` where `idQ` = $id");
	//var_dump($req);
	$data = $req->fetch();
		echo "<h3>".$data['titre']."</h3>";
		
		echo " Posted ".$data['dateQ']." by <a href=\"index.php?task=viewU&user=".$data['pseudo']."\">".$data['pseudo']."</a>";
		if($data['pseudo']==$_SESSION['pseudo']){
			echo "  <a class=\"label label-sm label-warning\" href=\"index.php?task=editQ&q=".$_GET['q']."\">Edit this question</a>";
			echo "  <a class=\"label label-sm label-danger\" href=\"delete.php?q=".$_GET['q']."\">Delete it</a>";
		}
		echo "<hr>";
		echo '<div class="question">';
			echo $data['question'];
		echo "</div><hr><h2>Answers <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#answer\"><span class=\"glyphicon glyphicon-plus \"> Add answer</span></a></h2>";
	$req =	$bdd->query("SELECT * FROM `reponse` where `idQ` = $id");
	while($data = $req->fetch()){
		$nbvote = $bdd->query("SELECT count(pseudo) FROM `vote` WHERE `idrep`='".$data['idR']."'");
		$nbvote = $nbvote->fetch();
		$nbvote = $nbvote[0];
		echo '<table class="table table-bordered">';
		echo "<tr>
				<td><div class=\"reponse\">".$data['reponse']."</div></td>
				<td>
					<span class=\"big\" ><span style=\"color:cyan\">$nbvote</span> <a href=\"like.php?rep=".$data['idR']."&q=".$_GET['q']."\"><span class=\"glyphicon glyphicon-ok\"></span></a></span>

				</td>
				</tr>";
		
		echo "<tr>
					<td></td>
					<td>answered by <a href=\"index.php?task=viewU&user=".$data['pseudo']."\">".$data['pseudo']."</a></td>
				</tr>";
		echo "</table>";

	}
	
?>
<div class="modal fade" id="answer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Your answer</h4>
      </div>
      <div class="modal-body">
        	<form action=<?php echo "\"addrep.php?q=".$_GET['q']."\""; ?> id="formrep" method="POST">
        		<textarea name="reponse" class="form-control" placeholder="Saisir reponse" style="resize:none; height:220px;"></textarea>
        	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" onclick="submit()" class="btn btn-primary">Post</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
	function submit () {
		document.getElementById('formrep').submit();
	}
</script>
<style>
	.big {
		font-size: 28px;
	}
	.question{
		background-color: #F2F2F2;
		width: 40%;
		padding: 10px 15px 15px 10px;
	}
	.reponse{
		background-color: #FAFAFA;
		width: 40%;
		padding: 10px 15px 15px 10px;
	}
</style>