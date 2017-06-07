<?php
	require_once 'config.php';
	$con=mysqli_connect(host,username,password);
	if($con){
		//echo "success connnect";
	}else{
		//echo "failed connect";	
	}
	
	if(mysqli_select_db($con,"info")){
		//echo "success select  db";
	}else{
		//echo "failed select db";
	}
	
	if(mysqli_query($con,"set names utf8")){
	   // echo "success";
	}else{
	  //  echo "fail";
	}


?>
