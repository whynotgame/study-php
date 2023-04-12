<?php

$Uid=$_GET['Uid'];
echo $Uid;
require('../conn.php');
$conn->query("set names utf8");
$sql="delete from employee where id=?;";
$rs=$conn->prepare($sql);
$rs->bind_param('i',$Uid);
$rs->execute();
$conn->close();
header("Location: ../department/departmentlist.php");
?>