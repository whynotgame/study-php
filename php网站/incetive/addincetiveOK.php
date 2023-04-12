<?php
var_dump($_POST);
echo "<hr>";
$incerea=$_POST['incerea'];
$empid=$_POST['empid'];
$depid=$_POST['depid'];
echo "<hr>";
require("../conn.php");
$conn->query("set names utf8");
$sql="insert into incetive (incerea,empid,depid) values (?,?,?);";
$re=$conn->prepare($sql);
$re->bind_param('sss',$incerea,$empid,$depid);
$res=$re->execute();
if($res){
	echo "添加成功";
	header('Location: incetiveList.php');
}
else{
	echo "添加失败".$conn->error;
}
?>