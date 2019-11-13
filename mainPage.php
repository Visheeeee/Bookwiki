<html>
<head>
	<title>Bookwiki</title>
	<link rel="stylesheet" type="text/css" href="mainPage.css">
	<style>
		.container img { width:1380; height:200;}
		#HSB { 
		position:absolute;
		left:30%;}
		
		#HSBN { 
		position:absolute;
		left:42%;}
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
	
	<!-- <table class="Table">
		<col width="1500">
		<col width="500">
		<tr>
			<th class="Sell">Hot selling books</th>
			<th class="News">Announcements/News</th>
		</tr>
		<tr>
			<td class="col1">
				<a href="" class="hb" style="display:inline; text-align:center;"><p class=""><pre>This is the book ranked number 1</pre></p></a>
				<a href="" class="hb" style="display:inline; text-align:center;"><p class=""><pre>This is the book ranked number 2</pre></p></a>
				<a href="" class="hb" style="display:inline; text-align:center;"><p class=""><pre>This is the book ranked number 3</pre></p></a>
				<a href="" class="hb" style="display:inline; text-align:center;"><p class=""><pre>This is the book ranked number 4</pre></p></a>
				<a href="" class="hb" style="display:inline; text-align:center;"><p class=""><pre>This is the book ranked number 5</pre></p></a>
			</td>
			<td>
				<a href="" class="links"><p class="article">This is news article number 1</p></a>
				<a href="" class="links"><p class="article">This is news article number 2</p></a>
				<a href="" class="links"><p class="article">This is news article number 3</p></a>
				<a href="" class="links"><p class="article">This is news article number 4</p></a>
			</td>
		</tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr>
			<th class="Sell">Bestselling books</th>
		</tr>
		<tr>
			<td class="col1">
				<a href="https://www.google.com/" class="hb" style="display:inline; text-align:center;"><p class=""><pre>This is the book ranked number 1</pre></p></a>
				<a href="https://www.google.com/" class="hb" style="display:inline; text-align:center;"><p class=""><pre>This is the book ranked number 2</pre></p></a>
				<a href="https://www.google.com/" class="hb" style="display:inline; text-align:center;"><p class=""><pre>This is the book ranked number 3</pre></p></a>
				<a href="https://www.google.com/" class="hb" style="display:inline; text-align:center;"><p class=""><pre>This is the book ranked number 4</pre></p></a>
				<a href="https://www.google.com/" class="hb" style="display:inline; text-align:center;"><p class=""><pre>This is the book ranked number 5</pre></p></a>
			</td>
		</tr>
	</table> -->


	<table border="0" align='center'>
		<tr>
			<th colspan="2" align="left"><h2>Best Selling Books</h2></th>
			<th align="right"><h2>News articles</h2></th>
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

	$val=0;
	$query="SELECT Bname,Aname,Publisher,Year,Genre FROM AllBooks";
	$result=$conn->query($query);
	while($val!=5)
	{
		$val++;
		$row=$result->fetch_assoc();
		$name=$row['Bname'];
		$name1=str_replace("'","",$name);
		echo "<tr><td align:'right'><a href='BestSellingBooks/$name1.html'><img src='BestSellingBooks/$name1.jpg' style='width:150px; height:200px'/></a></td>";
		echo "<td align:'left'><a href='BestSellingBooks/$name1.html'>",$row['Bname'],"</td>";
		echo "<td align='right'>",$val,"</td></tr>";
	}

?>

	</table>
	<br />
	<br />
	<br />
	<h2 align='center'>Hot Selling Books</h2>
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

	$val=0;
	$query="SELECT Bname,Aname,Publisher,Year,Genre FROM AllBooks where Year >= 1970";
	$result=$conn->query($query);
	while($val!=5)
	{
		$val++;
		$row=$result->fetch_assoc();
		$name=$row['Bname'];
		$name1=str_replace("'","",$name);
		/* echo "<tr><td align:'left'><a href='BestSellingBooks/$name1.html'><img src='BestSellingBooks/$name1.jpg' style='width:150px; height:200px'/></a></td>";
		echo "<td align:'left'><a href='BestSellingBooks/$name1.html'>",$row['Bname'],"</td>";
		echo "<td></td></tr>"; */
		echo "<a href='BestSellingBooks/$name1.html' ><img src='BestSellingBooks/$name1.jpg' id='HSB' float:left align='center' style='width:150px; height:200px'/></a>";
		echo "<br /><br /><br /><br /><br /><a href='BestSellingBooks/$name1.html' id='HSBN'>",$row['Bname'],"</a><br/><br/><br/><br/><br/><br />";
	}
?>
		

</body>
</html>
