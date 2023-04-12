<?php
$Uid=$_GET['Uid'];

require('../conn.php');
$conn->query("set names utf8");
$sql1="SELECT * FROM task where id=$Uid;";

//在php应用程序中执行这个语句

$res1=$conn->query($sql1);



?>