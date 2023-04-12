<?php

require("../conn.php");
$conn->query("set names utf8");
$sql="SELECT * FROM news limit 3;";
$res=$conn->query($sql);

?>