<?php
	$conn=mqsqli_connect("localhost",'yash','raj');
	mysql_select_db($conn,"yashraj");
	if($conn->connect_error)
		die($conn->connect_error);
	$sql="INSERT INTO details(fname,lname,mail,city,state,zipCode,asp,cp,mp)VALUES('$_POST[fname]','$_POST[lname]','$_POST[mail]','$_POST[city]','$_POST[zipCode]','$_POST[asp]','$_POST[cp]','$_POST[mp]')";
	$result=$conn->query($sql);
	if(!$result)
		die($conn->error);

	header("location:yashraj.php");
?>