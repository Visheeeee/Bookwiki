<?php
	//echo "This is a test";
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sample";//Database name
	// Create connection with server
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		//echo "Connected!!<br />";
		die("Connection failed: " . mysqli_connect_error());
	}
	
	//query
	$sql="INSERT INTO nametable (Firstname,Lastname,EmailID,Username,Password)
	VALUES
	('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[usname]','$_POST[pass]')";
	
	if (mysqli_query($conn,$sql))//checks if the query worked properly on the table 
	{
		echo "Data inserted.";
		header("Location:Login.html");
		//die('Error: ' . mysqli_error());
	}
	echo "Error.";
	
	/*$sql = "CREATE TABLE student_details 
	(student_name VARCHAR(30),
	student_id INT(6),student_address VARCHAR(30),student_branch VARCHAR(30))";
	if (mysqli_query($conn, $sql)) {
		echo "Table Student_details created successfully <br />";
	} else {
		echo "Error creating table: " . mysqli_error($conn),"<br />";
	}
	$sql = "DELETE FROM student_details WHERE student_id=314";

	if ($conn->query($sql) === TRUE) {
		echo "Record deleted successfully <br />";
	} else {
		echo "Error deleting record: " . $conn->error;
	}*/

	mysqli_close($conn);//destroy connection
?>