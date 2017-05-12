<?php 
      include("database.php");
      include("function.php");   
     $id = $_GET["id"];
     $query = "delete from article where id = $id ";
     mysql_query("delete from comments where post_id = $id ");
     mysql_query("delete from interest where post_id = $id ");
     $result = mysql_query($query);
	 if($query){
	 	header("location: index.php");
	 }else{
	 	echo  mysql_error();
	 } 

	?>