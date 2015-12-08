<?php
	$host="localhost";
	$db_user="root";
	$db_pass="mysqlroot";
	$db_name="test_user";
	$timezone="Asia/Shanghai";
	$curNum=1;

	$link=mysqli_connect($host,$db_user,$db_pass,$db_name);

	//init corresponding data in statics
	$pageSize = 8; //每页显示数
	$result = mysqli_query($link,"select id from food");
	$total = mysqli_num_rows($result);//总记录数
	$totalPage = ceil($total/$pageSize); //总页数