<?php
echo "修改处理程序";
var_dump($_POST);
echo "<hr>";
$uid=$_GET['uid'];
$username=$_POST['username'];
$password=$_POST['password'];
$detail=$_POST['detail'];
// $image="../img/".$_POST['image'];
// echo $image;
require("../conn.php");
echo "<hr>";
$conn->query("set names utf8");
$sql="update userdata set uname=?,password=?,details=? where id=? ;";
$re=$conn->prepare($sql);
$re->bind_param('sisi',$username,$password,$detail,$uid);
$res=$re->execute();
if($res){

	echo "修改成功";
	header('Location: userList.php');
}
	
else{
	echo "失败";
}

?>