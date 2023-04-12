<?php
$Uid=$_GET['Uid'];
echo $Uid;
echo "修改处理程序";
var_dump($_POST);
echo "<hr>";
$depname=$_POST['depname'];
$detail=$_POST['detail'];
$playdate=$_POST['playdate'];
echo $playdate;

require("../conn.php");
echo "<hr>";
$sql="select depid from department where depname=?";
$rs=$conn->prepare($sql);
$rs->bind_param('s',$depname);
$rs->execute();
$rs->bind_result($col1);
$rs->fetch();
if($rs){
	echo "找到了部门id号";
	require("../conn.php");
	$conn->query("set names utf8");
	$sql1="update task set deadline=?,detail=?,depid=? where id=? ;";
	$re=$conn->prepare($sql1);
	$re->bind_param('ssii',$playdate,$detail,$col1,$Uid);
	$res=$re->execute();
	if($res){
		echo "修改成功";
	}
    header("Location: showtask.php");
}
else{
	echo "添加失败".$conn->error;
}

// $conn->query("set names utf8");
// $sql="update empsign set signintime=?,signouttime=?,signin=?,signout=? where signinid=? ;";
// $re=$conn->prepare($sql);
// $re->bind_param('ssiii',$signintime,$signouttime,$signin,$signout,$signinid);
// $res=$re->execute();
// if($res){
// 	echo "修改成功";
// 	header('Location: signList.php');
// }
// else{
// 	echo "失败";
// }
?>