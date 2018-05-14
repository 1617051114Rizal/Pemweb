<?php
	session_start();  
	include 'DatabaseConnection.php'; 
	$deleteQuery=" delete from active_user where user_id='".$_SESSION['userId']."'";
	mysql_query($deleteQuery) or die(mysql_errno());	
	session_unset();
	session_destroy();  
	header( 'Location: http://localhost/GET2TEST/index.php' ) ;
?>   
