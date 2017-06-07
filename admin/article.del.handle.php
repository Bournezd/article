<?php
    require_once 'article.modify.php';
	require_once('../connect.php');
	$id=$_GET['id'];
	$deletesql="delete from article where id=$id";
	if(mysqli_query($con, $deletesql)){
	    echo "<script>alert('删除成功');</script>";
	}else{
	    echo "<script>alert('删除失败');</script>";
	}
	
?>