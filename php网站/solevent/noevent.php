<?php
$Uid=$_GET['Uid'];
require("../conn.php");
$conn->query("set names utf8");
$sql="update event set step=0 where eventid = $Uid;";
$res=$conn->query($sql);
if($res){
	echo "修改成功";
	header('Location: showsol.php');
}
else{
	echo "失败";
}
?>