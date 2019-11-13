<html>
<head>
	<title>Bookwiki</title>
	<link rel="stylesheet" type="text/css" href="mainPage.css">
	<style>
		.container img { width:1380; height:200;}
	</style>
</head>
<body>
	<a href="mainPage.html"><h1 class="Websitename">Bookwiki</h1></a>
	<div class="container">
		<img src="Books4.jpg" alt="Book image" id="bkgd">
		<a href="/Genre/genreMain.html"> <button class="Genre">Genre</button> </a>
		<a href="Fantasy.php"> <button class="Biography">Biography</button> </a>
		<a href="Genre/FictionGenre.html"> <button class="Fiction">Fiction</button> </a>
		<a href="Genre/romanceGenre.html"> <button class="Romance">Romance</button> </a>
		<a href="Genre/horrorGenre.html"> <button class="Horror">Horror</button> </a>
		<a href="Genre/mysteryGenre.html"> <button class="Mystery">Mystery</button> </a>
		
		<form method="post" action="search.php">
			<input type="text" class="Searchbox" size="20" maxlength="100" placeholder="Search for a book" name="s" value="">
			<input type="submit" class="Search" value="Search">
		</form>
		
		<a href="Signup.html"><button class="su">Sign up</button></a>
		<a href="Login.html"><button class="li">Login</button></a>
	</div>
	
	<table border="1">
		<tr>
			<th>Book name</th>
			<th>Author name</th>
			<th>Publisher</th>
			<th>Year</th>
			<th>Genre</th>
		</tr>
<?php
	//to list out all the books under fantasy genre
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sample";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if(!$conn)
	{
		die("Connection failed:"+mysqli_connect_error());
	}
	$query="SELECT Bname,Aname,Publisher,Year,Genre FROM AllBooks where Genre='Fantasy'";
	$result=$conn->query($query);//query is passed and an object is returned which has several attributes, one of which is num_rows.
	
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())//returns that particular row from the list of rows obtained through the query as an array of attributes(think of it like a dictionary). 
		{
				$name=$row['Bname'];//Obtaining the Book name out of that row.
				echo "<tr><td><a href='$name.html'>",$row['Bname'],"</a></td><td>",$row['Aname'],"</td><td>",$row['Publisher'],"</td><td>",$row['Year'],"</td><td>",$row['Genre'],"</td></tr>";
		}
	}
	else
	{
		echo "No results.";
	}
	
	
	
	
	mysqli_close($conn);

?>