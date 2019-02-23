<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>activity</title>
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/mystyle.css">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar header">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="assets/images/logo.png" class='logo img-circle img-responsive' alt=""></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Quiz</a></li>
        <li class='active'><a href="#">Reviewer</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="jumbotron text-center">
  <h1>Reviewer</h1> 
  <p>Search Topic</p> 
  <form class="form-inline">
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-success">Search Topic</button>
  </form>
  <div class="subjects">
  </div>
</div>
<div class="container">
  <div class="topics">
    
  </div>
</div>
  <script src="assets/js/reviewer.js"></script>
</body>
</html>