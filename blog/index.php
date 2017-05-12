<?php
 session_start();
?>

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
          <?php 
          if(isset($_SESSION['fullname'])){ 
          if($_SESSION['fullname']){
            ?>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php 
                echo $_SESSION['fullname'];
           ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Profile</a></li>
            <li><a href="new.php">New Blog</a></li>            
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">Log Out</a></li>
          </ul>
          <?php
          } }else{ 
            ?>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="signin.php">Sign In</a></li>
            <li><a href="signup.php">Sign Up</a></li>            
          </ul>          
          <?php }?>


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
   <h2> All Blogs</h2>
      <div class="article-all">

       <?php
        include("database.php");
        include("function.php");
        select();

       ?>
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