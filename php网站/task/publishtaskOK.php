<?php


//var_dump($_POST);
echo "<hr>";
$depname=$_POST['depname'];
$detail=$_POST['detail'];
$playdete=$_POST['playdate'];

require("../conn.php");
$conn->query("set names utf8");

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
	$sql1="insert into task (deadline,detail,depid,step) values (?,?,?,1);";
	$re=$conn->prepare($sql1);
	$re->bind_param('ssi',$playdete,$detail,$col1);
	$res=$re->execute();
	if($res){
		//echo "成功";
		header("Location:publishtask.php");
	}
    //var_dump($col1);
}
else{
	echo "添加失败".$conn->error;
}
?>