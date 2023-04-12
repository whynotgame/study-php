<?php
var_dump($_POST);
$textadd=$depname=$_POST['textarea'];
echo $textadd;
require("../conn.php");

$conn->query("set names utf8");
$sql="insert into event (reviewed,step) values (?,1);";
$re=$conn->prepare($sql);
$re->bind_param('s',$textadd);
$res=$re->execute();
if($res){
	echo "添加成功";
	header('Location: showemploy.php');
}
else{
	echo "添加失败".$conn->error;
}
?>