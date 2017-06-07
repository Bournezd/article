<?php
require_once '../connect.php';
//print_r($_POST);
if(!(isset($_POST['title'])&&!empty($_POST['title']))){
    echo "<script>alert('标题不能为空');window.location.href='article.add.php'</script>";
}
if(!(isset($_POST['author'])&&!empty($_POST['author']))){
    echo "<script>alert('作者不能为空');window.location.href='article.add.php'</script>";
}
if(!(isset($_POST['description'])&&!empty($_POST['description']))){
    echo "<script>alert('简介不能为空');window.location.href='article.add.php'</script>";
}
if(!(isset($_POST['content'])&&!empty($_POST['content']))){
    echo "<script>alert('内容不能为空');window.location.href='article.add.php'</script>";
}
//print_r($_POST);
$title=$_POST['title'];
$author=$_POST['author'];
$description=$_POST['description'];
$content=$_POST['content'];
$dateline=time();
$sql="insert into article(title,author,description,content,dateline) values('$title','$author','$description','$content',$dateline)";
//echo $sql;

if(mysqli_query($con,$sql)){
    echo "<script>alert('发布成功');window.location.href='article.add.php'</script>";
}else{
    echo "<script>alert('发布失败');window.location.href='article.add.php'</script>";
}
?>
