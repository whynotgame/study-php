<?php
var_dump($_POST);
echo "<hr>";
$username=$_POST['username'];
$playdate=$_POST['playdate'];
$detail=$_POST['detail'];
$password=$_POST['password'];
$empid=$_POST['empid'];
$isemp=$_POST['isemp'];
$isman=$_POST['isman'];
echo $playdate;
echo "<hr>";
require("../conn.php");
$conn->query("set names utf8");
$sql="insert into userdata (uname,password,playdate,details,empid,isemp,isman) values (?,?,?,?,?,?,?);";
$re=$conn->prepare($sql);
$re->bind_param('sssssss',$username,$password,$playdate,$detail,$empid,$isemp,$isman);
$res=$re->execute();
if($res){
	echo "添加成功";
	header('Location: userList.php');
}
else{
	echo "添加失败".$conn->error;
}
?>