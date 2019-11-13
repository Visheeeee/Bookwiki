<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sample";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if(!$conn)
	{
		die("Connection failed:"+mysqli_connect_error());
	}
	
	$query="INSERT INTO requests (username,Aname,Bname) VALUES ('$_POST[usname]','$_POST[aname]','$_POST[bname]')";
	if(mysqli_query($conn,$query))
	{
		echo "Succesfully placed the request.";
		//sleep(5);
		header("Location:mainPage.html");
	}
	
	//header("Location:mainPage.html");
	
	mysqli_close($conn);
?>