<?php
require("getdepid.php");
require("../conn.php");
$conn->query("set names utf8");
$sql="SELECT * FROM task where step=3 and depid=$depid;";
$res=$conn->query($sql);

?>