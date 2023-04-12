<?php

require("../conn.php");
$conn->query("set names utf8");
$sql1="SELECT * FROM event where step = 2;";
$res1=$conn->query($sql1);
?>