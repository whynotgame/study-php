<?php

require('../conn.php');

//
$conn->query("set names utf8");
$sql="SELECT * FROM task;";

//在php应用程序中执行这个语句

$res=$conn->query($sql);



?>