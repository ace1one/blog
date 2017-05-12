<?php 
session_start();
      include("database.php");
      include("function.php");   
     echo  $post_id = $_GET["id"];
     echo $int_user_id = $_SESSION['id'];

     $query = "select post_id, int_user_id from interest where post_id ='$post_id' and int_user_id ='$int_user_id'";
     $result = mysql_query($query);
     $check = mysql_num_rows($result);
     if($check < 1){
        $count = 0;
        $count = $count + 1;
        $dislike = $count;
        $query1 = "insert into interest values(NULL,'','$dislike','$post_id','$int_user_id')";
       // mysql_query("delete from interest where post_id = $id ");

		$result1 = mysql_query($query1);
		header("location: index.php");

     }else{
     	header("Location: index.php");
     }


	?>