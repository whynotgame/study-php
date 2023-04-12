<?php
//var_dump($_POST);
echo "<hr>";
$empname=$_POST['empname'];
$emdepartment=$_POST['emdepartment'];
$empstate=$_POST['empstate'];
$basemoney=$_POST['basemoney'];
echo "<hr>";
require("../conn.php");
$sql="select depid from department where depname=?";
$rs=$conn->prepare($sql);
$rs->bind_param('s',$emdepartment);
$rs->execute();
$rs->bind_result($col1);
$rs->fetch();
if($rs){
	//echo $col1;
	require("../conn.php");
	$conn->query("set names utf8");
$sql="insert into employee (empname,depid,empstate,basemoney,emdepartment) values (?,?,?,?,?);";
$re=$conn->prepare($sql);
$re->bind_param('sssss',$empname,$col1,$empstate,$basemoney,$emdepartment);
$res=$re->execute();
if($res){
	echo "添加成功";
	header('Location:../department/departmentlist.php');
}
else{
	echo "添加失败".$conn->error;
}
}


?>