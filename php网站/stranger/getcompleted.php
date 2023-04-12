<?php

require("../conn.php");
$conn->query("set names utf8");
$sql="SELECT completed FROM event where completed != '';";
$res=$conn->query($sql);

?>