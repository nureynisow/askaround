<style type="text/css">
.form-signin {
  max-width: 300px;
  padding: 25px;
  margin: 0 auto;
  background-color: #E1E6FA;
  border : 20px 20px 20px 20px;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
</style>
<center><h1>Ask Around </h1></center>

<form action="logger.php" method="POST" class="form-signin" role="form">
	<h3>Authentification</h3>
	<input type="text" name="username" class="form-control" placeholder="Nom d'utilisateur"/>
	<input type="password" name="pwd" class="form-control" placeholder="Mot de passe"/>
	<input type="submit" class="btn btn-danger"/>		
</form>