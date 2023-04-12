<?php
$date=date('Y-m-d');
echo $date;
session_start();
require("../conn.php");
$empid=$_SESSION['empid'];
$conn->query("set names utf8");
$sql="insert into empsign (empid,signintime,signin) values (?,?,1);";
$re=$conn->prepare($sql);
$re->bind_param('is',$empid,$date);
$res=$re->execute();
if($res){
	echo "添加成功";
	$sql3="update employee set empsign=empsign+1 WHERE id=?";
	$re1=$conn->prepare($sql3);
	$re1->bind_param('i',$empid);
	$res1=$re1->execute();
	if(res1){
		header('Location: showemploy.php');
	}
	else{
		echo "数据有误";
	}
	
}
else{
	echo "添加失败".$conn->error;
}
?>
