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
			if(!isset($_SESSION['pseudo'])){
				include 'auth.php';
				if(isset($_SESSION['warn']))
					echo "<center><h1>".$_SESSION['warn']."</h1></center>";
			}
			else{
				include 'nav.php';
				echo "<div id=\"main\">";
				include 'content.php';
				echo '</div>';
			}
			?>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>	
	</body>
</html>
<style type="text/css">
#main{
	position: absolute;
	top : 50px;
	left: 50px;
}
body{
	/*background-image: url('back.jpg');**/
}
</style>
<script type="text/javascript">
	function reset(id){
		document.getElementById(id).reset();
	}
	function checkpwd(){
		var pwd1 = document.getElementById("pwd1").value;
		var pwd2 = document.getElementById("pwd2").value;
		if(pwd1 == pwd2 )//&& pwd1.length > 6 && pwd1.length < 12)
			document.getElementById("submit").disabled=false;
		else 
			document.getElementById("submit").disabled=true;
	}
</script>
