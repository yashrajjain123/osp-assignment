<?php
$conn= mysqli_connect('localhost','yash','raj');
mysqli_select_db($conn,'yashraj');
if(!$conn)
	echo "Unsuccessful Connection";
else
{
	if(isset($_POST['column_name'])==TRUE && isset($_POST['row_name'])==TRUE)
	{
		$c_name=$_POST['column_name'];
		$r_name=$_POST['row_name'];
		$sql = "DELETE FROM details WHERE ".$c_name." = '".$r_name."'";
		if($conn->query($sql) == TRUE)
			echo "Row deleted Successfully";
	}
}
?>
<html>
	<body>
		</br>
		<form action="#" method="post" align="center">
			<label for="column_name">Enter column name to check for row to delete<input name="column_name"></br>
			<label for="row_name">Enter value of given column of row to be deleted<input name="row_name"></br>
			<input type="submit"></br>
			</form>
		</br>
		<a href="yashraj.php">click here to go to see database values</a>
	</body>
</html>