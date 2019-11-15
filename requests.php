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
		header("Location:mainPage.php");
	}
	
	//header("Location:mainPage.html"); echo "<tr><td>",$row['Bname'],"</td><td>",$row['Aname'],"</td><td>",$row['Publisher'],"</td><td>",$row['Year'],"</td><td>",$row['Genre'],"</td></tr>";
	
	mysqli_close($conn);
?>