<?php

require("../conn.php");
$conn->query("set names utf8");
$sql="SELECT pending FROM event where pending != '';";
$res=$conn->query($sql);

?>