<?php

	$conn = mysqli_connect("localhost",'yash',"raj");
	if($conn->connect_error)
		die($conn->connect_error);

	$sql="SELECT * FROM details ";

	$result=mysqli_query($conn,,$sql);

	if(!$result)
		die ($conn->error);
?>

<html>
	<body>
		<table border="5 px">
		<th>First Name</th>
		<th>Last Name</th>
		<th>Mail</th>
		<th>City</th>
		<th>State</th>
		<th>Zip Code</th>
		<th>Are you Speaking At Conference</th>
		<th>Conference Pass</th>
		<th>Meal Preference</th>
		<?php
			while($arr=mysqli_fetch_array($result))
			{
		?>
		<tr>
			<td><?php echo $arr['fname']?></td>
			<td><?php echo $arr['lname']?></td>
			<td><?php echo $arr['mail']?></td>
			<td><?php echo $arr['city']?></td>
			<td><?php echo $arr['state']?></td>
			<td><?php echo $arr['zip_code']?></td>
			<td><?php echo $arr['asp']?></td>
			<td><?php echo $arr['cp']?></td>
			<td><?php echo $arr['MP']?></td>
		</tr>
		<?php 
			}
		 ?>

		</table>
		</br></br>
		<a href="updateValues.php">Click here to update some data</a></br></br>
		<a href="deleteValues.php">Click here to delete a row</a></br></br>
		<a href="retrivalValues.php">Click here to retrieve data based on some condition</a></br></br>
	</body>
</html>