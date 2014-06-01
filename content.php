<?php
	if(!isset($_GET['task']))
		include 'allquestion.php';
	else{
		if($_GET['task']=='ask')
			include 'askaround.php';
		if($_GET['task']=='viewQ')
			include 'question.php';
		if($_GET['task']=='tags')
			include 'tags.php';
		if($_GET['task']=='search')
			include 'search.php';
		if($_GET['task']=='mine')
			include 'mine.php';
		if($_GET['task']=='editQ')
			include 'editQ.php';
		
	}
?>
