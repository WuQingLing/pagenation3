<?php
include_once('connect.php');
$cPage=$curNum-1;
$startPage=$cPage*8+1;
$pageSize=8;
$query = mysqli_query($link,"select id,title,pic from food order by id asc limit $startPage,$pageSize");
while($row=mysqli_fetch_array($query)){
	print_r($row);
}

mysql_close();