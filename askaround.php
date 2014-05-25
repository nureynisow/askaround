<center><h1> Ask a question</h1></center>
<form action="ask.php" method="POST" class="" role="form">
	<input type="text" name="title" placeholder="Title" class="form-control" required/><hr>
	<h3>Question</h3>
	<textarea required name="question" class="form-control" rows="3" style="height:250px; width:420px;resize:none">

	</textarea><hr>
	<input type="text" required name="tags" class="form-control" style="width:512px" placeholder="Tags"/>
	<span class="label label-info">Separate by ';'</span><br><br>
	<input type="submit" class="btn btn-default" value="Post your Question">
</form>