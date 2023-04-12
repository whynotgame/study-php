<?php
$date=date('Y-m-d');
echo $date;
session_start();
require("../conn.php");
$empid=$_SESSION['empid'];
$conn->query("set names utf8");
$sql="update empsign set signout=1 where signintime=?";
$res=$conn->prepare($sql);
$res->bind_param('s',$date);
$res1=$res->execute();
if($res1){
	$sql3="update employee set empsignout=empsignout+1 WHERE id=?";
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
	
    
?>
