<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Ask Around</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"><span> Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Questions <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?task=ask">Ask Question</  a></li>
            <li><a href="index.php?task=tags">Tags</a></li>
            <li><a href="index.php?task=usersQ">users</a></li>
            <li class="divider"></li>
            <li><a href="index.php?task=mine">My Questions</a></li>
          </ul>
        </li>
        <li><a target="_blank" href="http://www.labri.fr/perso/falleri/dist/ens/it103/projets/Projet2014.pdf">About</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search" method="POST" action="index.php?task=search">
        <div class="form-group">
          <input type="text" class="form-control" name="q" placeholder="Search a question">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['nomC'];?> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?task=viewprofile"><span class="glyphicon glyphicon-user"> View Profile</a></li>
            <li><a href="index.php?task=settings"><span class="glyphicon glyphicon-wrench"> Settings</a></li>
            <li class="divider"></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-off"> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>