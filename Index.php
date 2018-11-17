<!DOCTYPE html>
<html>
<head>
	<title>WynnTec</title>
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<!-- Link to CSS style sheet -->
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body>
	<h1>WynnTec</h1>

<!-- Update Assets -->
<?php
	include_once 'dbh.inc.php';
	$sql = "SELECT * FROM asset ";
	$records = mysqli_query($con1, $sql);
?>


<!-- Table for displaying database --------------------------------------------->
<hr>
<br>
<table>
	<tr>
		<th>Manufacturer</th>
		<th>Model</th>
		<th>Common Name</th>
		<th>Asset Number</th>
		<th>Location</th>
		<th>User</th>
		<th>Status</th>
		<th>Date Entered</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>

	
<!-- Displays all rows of the 'uofl' database -->
<?php
	while($row = mysqli_fetch_array($records)) 
	{
		echo "<tr><form action=update.php method=post>";
		echo "<td><input type=text name=Manufacturer value='".$row['manufacturer']."'></td>";
		echo "<td><input type=text name=Model value='".$row['model']."'></td>";
		echo "<td><input type=text name=Common_name value='".$row['common_name']."'></td>";
		echo "<td><input type=text name=Asset_number value='".$row['asset_number']."'></td>";
		echo "<td><input type=text name=Location value='".$row['location']."'></td>";
		echo "<td><input type=text name=User value='".$row['user']."'></td>";
		echo "<td><input type=text name=Status value='".$row['status']."'></td>";
		echo "<td><input type=text name=Date_entered value='".$row['date_entered']."'></td>";
		echo "<input type=hidden name=id value='".$row['asset_id']."'>";
		echo "<td><button type=submit>Update</button>";
		echo "<td><button type=submit>Yuppers</button>";
		echo "</form></tr>";
	}
?>
<!------------------------------------------------------------------------>



<!-- New Assets ---------------------------------------------------------->

New Asset:<br>
<!-- This form takes inputs from the user and posts the information to newasset.php to be further used -->
<form action="includes/newasset.php" method="POST">
	<input type="text" name="manufacturer" placeholder="Manufacturer">
	<br>
	<input type="text" name="model" placeholder="Model">
	<br>
	<input type="text" name="common_name" placeholder="Common Name">
	<br>
	<input type="text" name="asset_number" placeholder="Asset Number">
	<br>
	<input type="text" name="location" placeholder="Location">
	<br>
	<input type="text" name="user" placeholder="User">
	<br>
	<input type="text" name="status" placeholder="Status">
	<br>
	<button type="submit" name="submit" >Add Asset</button>
	<br><br><br>
</form>


</body>


<!-- End of Webpage -->
</html>