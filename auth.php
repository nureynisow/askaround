<style type="text/css">
.form-signin {
  max-width: 300px;
  padding-left: 50px;
  padding-top: 25px;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
#form-login {
  margin-left: 40%;
  width: 350px;
  height: 300px;
  background-color: #E6E6E6;
  border-bottom-right-radius: 25px;
  border-top-right-radius: 25px;
  border-top-left-radius: 25px;

}
</style>
<center><h1>Ask Around </h1></center>
<div id="form-login">
  <form action="logger.php" method="POST" class="form-signin" role="form" id="log">
  	<h3>Authentification</h3>
  	<input type="text" name="username" class="form-control" placeholder="Nom d'utilisateur"/><hr>
  	<input type="password" name="pwd" class="form-control" placeholder="Mot de passe"/><hr>
  	<input type="submit" class="btn btn-info"/>		<input type="reset" class="btn btn-danger"/>   
  </form>
</div>
