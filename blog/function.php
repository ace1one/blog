<?php

// function insert(){

//  if(isset($_POST["submit"]))
//  {
//  	 if($_POST["submit"]== "submit"){
//  	 $fullname = $_POST['fullname'];
// 	 $address = $_POST['address'];
// 	 $telnumber = $_POST['telnumber'];
// 	 $mobnumber = $_POST['mobnumber'];
//      $query = "insert into contact values(NULL,'$fullname','$address','$telnumber','$mobnumber')";

//      $result = mysql_query($query);
// 	 if($query){
// 	 	echo '<script> alert("Insert data"); </script>';
	 	
// 	 }else{
// 	 	echo  mysql_error();
// 	 }

// 	}
// }
// }
?>


<?php 


function select(){
     $query = "select *from article";
     $result = mysql_query($query);
    // $total = mysql_num_rows($result);
	 while($row = mysql_fetch_array($result)){
	 	$id = $row['id'];
	 	$date = $row['date'];
	 	$author = $row['author'];
	 	$article = $row['article'];
	     $result_sec = mysql_query("select *from register where id = '$author'");
	     // $result_thi = mysql_query("select like from interest where post_id = '$id'");
	     // while($co = mysql_fetch_array($result_thi)){
	     // }
	     // #$like = mysql_num_rows($result_thi);
	     $res = mysql_fetch_array($result_sec);
	     $fullname = $res['fullname'];
	     $user_post_id = $res['id'];
	     $comm = mysql_query("select *from comments where post_id = '$id'");
	     $comm_number = mysql_num_rows($comm);

	     $like = mysql_query("select *from interest where post_id = '$id'");
	     $like_number = mysql_num_rows($like);
	 ?>
	 <div class="page-header">
          <h3><?php echo $fullname; ?> <small><?php echo $date; ?></small></h3>
     </div>
	 	<!-- <h4> <?php echo $author; ?></h4> -->
	 	<p> <?php echo substr($article,0,80); ?></p>
	 	<!-- <p> <?php echo $date; ?></p> -->
	 	<?php 
	 	if(isset($_SESSION['id'])){
		 	if($_SESSION['id'] == $author){
		 		?>
		 <a href="#"><?php echo  $comm_number;?> <i class="fa fa-comments-o"></i></a> &nbsp;&nbsp;
		 <a href="like.php?id=<?php echo $id;?>"><?php echo  $like_number;?> <i class="fa fa-thumbs-o-up"></i></a> &nbsp;&nbsp;
		 <a href="dislike.php?id=<?php echo $id;?>"><i class="fa fa-thumbs-o-down"></i></a>	&nbsp;&nbsp;	   
		   <a class="btn btn-info" href="show.php?id=<?php echo $id;?>">More</a> &nbsp;&nbsp;
		   <a class="btn btn-success" href="edit.php?id=<?php echo $id;?>">Edit</a> &nbsp;&nbsp;
		   <a class="btn btn-danger" href="delete.php?id=<?php echo $id;?>">Delete</a>

	 <?php
	} 
	elseif($_SESSION['id']){
		?>
		 <a href="#"><?php echo  $comm_number;?> <i class="fa fa-comments-o"></i></a> &nbsp;&nbsp;
		 <a href="like.php?id=<?php echo $id;?>"><?php echo  $like_number;?> <i class="fa fa-thumbs-o-up"></i></a> &nbsp;&nbsp;
		 <a href="dislike.php?id=<?php echo $id;?>"><i class="fa fa-thumbs-o-down"></i></a> &nbsp;&nbsp;
		   <a class="btn btn-info" href="show.php?id=<?php echo $id;?>">More</a>

	<?php }
	else{

	}
}
	 } } 
?>

<?php 
function show(){
	if(isset($_GET['id'])){
		$id = $_GET['id'];
     $query = "select *from article where id = '$id'";
     $result = mysql_query($query);
    // $total = mysql_num_rows($result);
	 while($row = mysql_fetch_array($result)){
	 	$id = $row['id'];
	 	$date = $row['date'];
	 	$author = $row['author'];
	 	$article = $row['article'];
	     $result_sec = mysql_query("select *from register where id = '$author'");
	     // $result_thi = mysql_query("select like from interest where post_id = '$id'");
	     // while($co = mysql_fetch_array($result_thi)){
	     // }
	     // #$like = mysql_num_rows($result_thi);
	     $res = mysql_fetch_array($result_sec);
	     $fullname = $res['fullname'];
	     $user_post_id = $res['id'];
	 ?>
	 <div class="page-header">
          <h3><?php echo $fullname; ?> <small><?php echo $date; ?></small></h3>
     </div>
	 	<!-- <h4> <?php echo $author; ?></h4> -->
	 	<p> <?php echo $article; ?></p>
	 	<!-- <p> <?php echo $date; ?></p> -->
	 	<?php 
	 	if(isset($_SESSION['id'])){
		 	if($_SESSION['id'] == $author){
		 		?>
		 <a href="like.php?id=<?php echo $id;?>"><?php// echo  $count;?> <i class="fa fa-thumbs-o-up"></i></a> &nbsp;&nbsp;
		 <a href="dislike.php?id=<?php echo $id;?>"><i class="fa fa-thumbs-o-down"></i></a>	&nbsp;&nbsp;	   
		   <a class="btn btn-info" href="show.php?id=<?php echo $id;?>">More</a> &nbsp;&nbsp;
		   <a class="btn btn-success" href="edit.php?id=<?php echo $id;?>">Edit</a> &nbsp;&nbsp;
		   <a class="btn btn-danger" href="delete.php?id=<?php echo $id;?>">Delete</a>

	 <?php
	} 
	elseif($_SESSION['id']){
		?>
		 <a href="like.php?id=<?php echo $id;?>"><i class="fa fa-thumbs-o-up"></i></a> &nbsp;&nbsp;
		 <a href="dislike.php?id=<?php echo $id;?>"><i class="fa fa-thumbs-o-down"></i></a>

	<?php }
	else{

	}
}
	 } } 
	}
?>












