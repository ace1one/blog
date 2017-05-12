<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
<!-- Latest compiled and minified CSS -->
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
	<link rel="stylesheet" type="text/css" href="css/page.css">
    <script type="text/javascript" src="js/page.js"></script>
	</head>
<body>
 
 <div class="navigation-bar">
  <nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">My BloG</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
        
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ashim Kc <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Profile</a></li>
            <li><a href="new.php">New Blog</a></li>            
            <li role="separator" class="divider"></li>
            <li><a href="#">Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>  
 </div>
 <div class="left-side-navigation">
   <ul class="navi">
     <li><a href="index.php"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a></li>
     <li><a href="#"><i class="fa fa-bell fa-2x" aria-hidden="true"></i></a></li>
     <li><a href="#"><i class="fa fa-comments-o fa-2x" aria-hidden="true"></i></a></li>
     <li><a href="#"><i class="fa fa-users fa-2x" aria-hidden="true"></i></a></li>
   </ul>
 </div>

 <div class="right-side-naviation">
   <div class="section-article">
   <h2> Log In</h2>
      <div class="article-all">
     <div class="form-group-section">
      <?php
           if(isset($_POST['submit'])){
            include("database.php");

            $fullname = $_POST["fullname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $query = "insert into register values(NULL,'1022992939','$fullname','$email','$password')";

             $result = mysql_query($query);
           if($query){
            echo 'Successfully created a account';
            
           }else{
            echo  mysql_error();
           }
          }
        ?>


      <form class="form-horizontal" role="form" action="signup.php" method="post">
      <div class="form-group">
      <label class="col-sm-12 control-label">Fullname</label>
      <div class="col-sm-12">
      <input type="text" class="form-control" name="fullname"
      placeholder="Fullname" required="required">
      </div>
      </div>
      <div class="form-group">
      <label class="col-sm-12 control-label">Email</label>
      <div class="col-sm-12">
      <input type="email" class="form-control" name="email"
      placeholder="Email" required="required">
      </div>
      </div>
      <div class="form-group">
      <label for="name" class="col-sm-12">Password</label>
      <div class="col-sm-12">
      <input type="password" class="form-control" name="password" placeholder="Password" required="required">
      </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
         <input type="submit" name="submit" class="btn btn-default">
        </div>
      </div>
      </form>
      </div>
      </div>
      </div>
   </div>
</div>

<!-- <div class="footer">
  <address>
<strong>Some Company, Inc.</strong><br>
007 street<br>
Some City, State XXXXX<br>
<abbr title="Phone">P:</abbr> (123) 456-7890
</address>
<address>
<strong>Full Name</strong><br>
<a href="mailto:#">mailto@somedomain.com</a>
</address>

</div> -->

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>