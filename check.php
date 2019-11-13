<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sample";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		//echo "Connected!!<br />";
		die("Connection failed: " . mysqli_connect_error());
	}
	
	$db=mysqli_select_db($conn,'sample');
	if(isset($_POST['usname']) && isset($_POST['pass']))
	{
		$firstname=$_POST['usname'];
		$lastname=$_POST['pass'];
		//echo "isset";
	}
	$query=mysqli_query($conn,"SELECT * FROM nametable where username='$firstname' and password='$lastname'");
	if(mysqli_num_rows($query)==1)//query is passed as argument and the function returns the number of rows which satisfy the query.
	{
		echo "Existing user";
		header("Location:mainPage.php");//Redirection to mainPage.php
	}
	else{
		echo "Incorrect username or password.";
	}
	
	mysqli_close($conn);

?>