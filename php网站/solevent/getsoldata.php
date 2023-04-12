<?php

require("../conn.php");
$conn->query("set names utf8");
$sql="SELECT * FROM event where step = 1;";
$res=$conn->query($sql);
?>