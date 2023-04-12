<?php

require('../conn.php');

//
$Uid=$_GET['Uid'];
$conn->query("set names utf8");
$sql="SELECT * FROM employee where depid=$Uid;";

//在php应用程序中执行这个语句

$res=$conn->query($sql);



?>