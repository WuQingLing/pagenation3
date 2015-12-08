<?php
include_once('connect.php');

if($curNum==1){
	//display the page
	$query = mysqli_query($link,"select id,title,pic from food order by id asc limit 1,$pageSize");
	while($row=mysqli_fetch_array($query)){
	print_r($row);
	}
}
if($curNum>1){
	$curNum-=1;
	$pageNum=$curNum*8+1;
	//display the page
	$query = mysqli_query($link,"select id,title,pic from food order by id asc limit $pageNum,$pageSize");
	while($row=mysqli_fetch_array($query)){
	print_r($row);
	}
}
?>