<?php
echo "修改处理程序";
var_dump($_POST);
echo "<hr>";
$uid=$_POST['id'];
$username=$_POST['username'];
$playdate=$_POST['playdate'];
$detail=$_POST['detail'];
$number=$_POST['number'];
$image="../img/".$_POST['image'];
echo $image;
require("../conn.php");
echo "<hr>";
$conn->query("set names utf8");
$sql="update employee set empname=?,basemoney=?,empsign=?,empsignout=?,emppicture=? where id=? ;";
$re=$conn->prepare($sql);
$re->bind_param('sssssi',$username,$playdate,$detail,$number,$image,$uid);
$res=$re->execute();
if($res){

	echo "修改成功";
	header('Location: userList.php');
}
	
else{
	echo "失败";
}

?>