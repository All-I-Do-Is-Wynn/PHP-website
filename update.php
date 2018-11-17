<?php
	include_once 'dbh.inc.php';
	
	//takes post used for updates
	$sql = "UPDATE asset SET 
		manufacturer= '$_POST[Manufacturer]',model = '$_POST[Model]',
		common_name = '$_POST[Common_name]',
		asset_number = '$_POST[Asset_number]',
		location = '$_POST[Location]',
		user = '$_POST[User]',
		status = '$_POST[Status]',
		date_entered = '$_POST[Date_entered]'
		WHERE asset_id = '$_POST[id]';";
	
	//deletes post using asset number
	$Asset_Number = $REQUEST['asset_number'];
	mysqli_query("DELETE FROM asset WHERE asset_number= 'Asset_Number'")
	or die(mysql_error());_
	
	//runs query of new info
	mysqli_query($con1,$sql);
		
	//if query is executed, the page is refreshed and updated
	if(mysqli_query($con1,$sql))
		header("refresh:1; url=index.php");
	else
		echo "Could not update";

?>