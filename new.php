<?php
	//echo "This is a test";
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sample";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if ($conn) {
		echo "Connected!!<br />";
		//die("Connection failed: " . mysqli_connect_error());
	}
	
	
	$sql="INSERT INTO nametable (username, password)
	VALUES
	('$_POST[usname]','$_POST[pass]')";
	
	if (mysqli_query($conn,$sql))
	{
		echo "Data inserted.";
		header("Location:Login.html");
		//die('Error: ' . mysql_error());
	}
	echo "1 record added";
	
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

	mysqli_close($conn);
?>