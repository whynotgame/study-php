<?php
var_dump($_POST);
echo "<hr>";
$depname=$_POST['depname'];
$depuse=$_POST['depuse'];
$depnum=$_POST['depnum'];
echo "<hr>";
require("../conn.php");
$conn->query("set names utf8");
$sql="insert into department (depname,depuse,depnum) values (?,?,?);";
$re=$conn->prepare($sql);
$re->bind_param('sss',$depname,$depuse,$depnum);
$res=$re->execute();
if($res){
	echo "添加成功";
	header('Location: departmentlist.php');
}
else{
	echo "添加失败".$conn->error;
}
?>