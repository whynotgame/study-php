<?php

//设置为数据库服务器名  登陆服务器的用户名  登陆密码  要访问的数据库名  如果不用默认端口还要在这里指明端口号
$servename='localhost';
$loginname='root';
$loginpass="";
$dbname='persondata';

$conn=new mysqli($servename,$loginname,$loginpass,$dbname);



?>