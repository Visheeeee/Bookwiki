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
		<a href="Genre/genreMain.html"> <button class="Genre">Genre</button> </a>
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
	
	<table border="0" align="center">
		
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
	
	$Bookname=$_POST['s'];
	echo "Searched for:$Bookname";
/* 	$sql="SELECT Bname,Aname,Publisher,Year,Genre FROM AllBooks where Bname LIKE '%$Bookname%'";
	$query=mysqli_query($conn,$sql);
	
	if($query) {
    while($row = mysqli_fetch_assoc($query)){
		echo "<tr><td>",$row['Bname'],"</td><td>",$row['Aname'],"</td><td>",$row['Publisher'],"</td><td>",$row['Year'],"</td><td>",$row['Genre'],"</td></tr>";
    }
	else
	{
		echo "No results.";
	}  */
	
	$query="SELECT Bname,Aname,Publisher,Year,Genre FROM AllBooks where Bname LIKE '%$Bookname%'";

	$result=$conn->query($query);
	
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
				$name=$row['Bname'];
				/* $name1=$row['Bname']; */
				$name1=str_replace("'","",$name);//In order to not having conflicting single and double quotes in the echo statements, We're removing all single quotes for simplicity.
				//echo "<tr><td><a href='$name.html'>",$row['Bname'],"</a></td><td>",$row['Aname'],"</td><td>",$row['Publisher'],"</td><td>",$row['Year'],"</td><td>",$row['Genre'],"</td></tr>";
				echo "<tr><td align:'center'><a href='BestSellingBooks/$name1.html'><img src='BestSellingBooks/$name1.jpg' style='width:150px; height:200px'/></a></td>";
				//echo "<tr><td><a href='BestSellingBooks/$name.html'><img src='BestSellingBooks/Harry Potter and the Sorcerer's Stone.jpg' /></a></td><br />";
				echo "<td><a href='BestSellingBooks/$name1.html'>",$row['Bname'],"</a><br />",$row['Aname'],"<br />",$row['Genre'],"</td></tr>";
		}
	}
	else
	{
		echo "No results.";
	}
	
	mysqli_close($conn);

?>
	</table>
</body>
</html>