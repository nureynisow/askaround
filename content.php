<?php
	if(!isset($_GET['task']))
		include 'allquestion.php';
	else{
		if($_GET['task']=='ask')
			include 'askaround.php';
		if($_GET['task']=='viewQ')
			include 'question.php';
	}
?>