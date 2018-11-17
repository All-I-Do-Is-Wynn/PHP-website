<?php
	//include file //../ is the parent directory
	include_once '../dbh.inc.php';
	
	//mysqli_real_escape_string() makes the _POST be run inside the database as characters, so that there cannot be 'code' inputs that mess up the database 
	$manufacturer = mysqli_real_escape_string($con1, $_POST['manufacturer']);
	$model = mysqli_real_escape_string($con1, $_POST['model']);
	$common_name = mysqli_real_escape_string($con1, $_POST['common_name']);
	$asset_number = mysqli_real_escape_string($con1, $_POST['asset_number']);
	$location = mysqli_real_escape_string($con1, $_POST['location']);
	$user = mysqli_real_escape_string($con1, $_POST['user']);
	$status = mysqli_real_escape_string($con1, $_POST['status']);
	
	
	$sql = "INSERT INTO asset(manufacturer,model,common_name,asset_number
	,location,user,status) VALUES ('$manufacturer','$model','$common_name',
	'$asset_number','$location','$user','$status');";
	
	mysqli_query($con1,$sql);
	
	header('Location: ../Index.php?NewWorkOrder=Success');