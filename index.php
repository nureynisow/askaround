<?php
	session_start();
?>
<!DOCTYPE html> 
<html>
	<head>
		<title>AskAround</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>
	<body>
		<?php
			if(!isset($_SESSION['login'])){
				include 'auth.php';
				if(isset($_SESSION['warn']))
					echo "<center><h1>".$_SESSION['warn']."</h1></center>";
			}
			else
				echo "WELCOME ".$_SESSION['nomC'];
			?>

	</body>
</html>
