<html>
<head>
	<title>Bookwiki</title>
	<link rel="stylesheet" type="text/css" href="mainPage.css">
	<style>
		.container img { width:1380; height:200;}
	</style>
</head>
<body>
	<h1 class="Websitename">Bookwiki</h1>
	<div class="container">
		<img src="Books4.jpg" alt="Book image" id="bkgd">
		<a href="/Genre/genreMain.html"> <button class="Genre">Genre</button> </a>
		<a href="/Genre/biographyGenre.html"> <button class="Biography">Biography</button> </a>
		<a href="/Genre/FictionGenre.html"> <button class="Fiction">Fiction</button> </a>
		<a href="/Genre/romanceGenre.html"> <button class="Romance">Romance</button> </a>
		<a href="/Genre/horrorGenre.html"> <button class="Horror">Horror</button> </a>
		<a href="/Genre/mysteryGenre.html"> <button class="Mystery">Mystery</button> </a>
		
		<form method="post" action="search.php">
			<input type="text" class="Searchbox" size="20" maxlength="100" name="s" value="">
			<input type="submit" class="Search" value="Search">
		</form>
	</div>
	
	<table border="1">
		<tr>
			<th>Book name</th>
			<th>Author name</th>
			<th>Published on</th>
		</tr>
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
	
	$Bname=$_POST['s'];
	//echo "$Bname";
	$query="SELECT * FROM AllBooks where Bookname='$Bname'";

	$result=$conn->query($query);
	
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
				echo "<tr><td>",$row['Bookname'],"</td><td>",$row['Authorname'],"</td><td>",$row['Publishedon'],"</td></tr>";
		}
	}
	else
	{
		echo "No results.";
	}

?>
	</table>
</body>
</html>