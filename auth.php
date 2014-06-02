<style type="text/css">
body{
  background-image: url('back.jpg');
}
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
  height: 320px;
  background-color: #E6E6E6;
  border-bottom-right-radius: 25px;
  border-top-right-radius: 25px;
  border-top-left-radius: 25px;

}
center{
  font-size: 128px;
  color: white;
  text-shadow: 3px 3px 2px black;
}
</style>
<center>Ask Around </center>
<div id="form-login">
  <form action="logger.php" method="POST" class="form-signin" role="form" id="log">
  	<h3>Authentification</h3>
  	<input type="email" name="username" class="form-control" placeholder="Nom d'utilisateur"/><hr>
  	<input type="password" name="pwd" class="form-control" placeholder="Mot de passe"/><hr>
  	<input type="submit" class="btn btn-info"/>		<input type="reset" class="btn btn-danger"/>  <br> 
    
  </form>
<a class="btn btn-sm" data-toggle="modal" data-target="#modal-signup" onclick="reset('signup-form');"> <span class="glyphicon glyphicon-plus"> </span> Sign Up </a> 
<!-- Modal Sign Up-->
    <div class="modal fade" id="modal-signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Sign up panel</h4>
          </div>
          <div class="modal-body">
              <form class="form-signin" role="form" method="POST" action="signup.php" id="signup-form" AUTOCOMPLETE="OFF">
                <input type="text" name="pseudo" class="form-control" placeholder="pseudo" required autofocus autocomplete="off"><hr>
                <input type="text" name="nom" class="form-control" placeholder="Last name" required autocomplete="off"><hr>
                <input type="text" name="prenom" class="form-control" placeholder="First name" required autocomplete="off"><hr>
                <input type="email" name="email" class="form-control" placeholder="Em@il" required autocomplete="off"><hr>
                <input type="password" name="pwd" class="form-control" placeholder="Password" required id="pwd1" autocomplete="off"> <span style="font-size:10px"><i>(more than 6 characters)</i><span><br>
                <input type="password" class="form-control" placeholder="Retype the password" required id="pwd2"onblur="checkpwd();" autocomplete="off"><hr>
                
                

                <span class="label label-danger" style="font-size:9px"> Check the two password's fields match to enable the submit button</span><br><br>
                <button  class="btn btn-info btn-lg btn-form-signin" disabled type="submit" id="submit">Submit</button>
                <button  class="btn btn-danger btn-lg btn-form-signin" type="reset">Reset</button>
                <style type="text/css">
                  /*.form-control{
                    font-size: 18px;
                    height: auto;
                    width: 50%;
                    padding: 10px;
                  }
                  .btn-form-signin{
                    width: 22%;
                  }*/
                </style>
              </form>
              
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

</div>


<script type="text/javascript">
  function reset(id){
    document.getElementById(id).reset();
  }
  function checkpwd(){
    var pwd1 = document.getElementById("pwd1").value;
    var pwd2 = document.getElementById("pwd2").value;
    if(pwd1 == pwd2 )//&& pwd1.length > 2 && pwd1.length < 13
      document.getElementById("submit").disabled=false;
    else 
      document.getElementById("submit").disabled=true;
  }
</script>