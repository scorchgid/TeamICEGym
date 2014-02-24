<html>
<head>
	<title>Page Title</title>
	<?php
	$username = "k1009705";
	$password = "teamice";
	$hostname = "studentnet.kingston.ac.uk";
	
	//Connection to database
	$dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
	echo "Connected to TeamIce Database<br>";
	
	$selected = mysql_select_db("	",$dbhandle) or die("Could not select examples"
	
	//execute the SQL query and return records
	$result = mysql_query("SELECT * FROM STAFF");
	
	//fetch tha data from the database 
	while ($row = mysql_fetch_array($result)) {
   	echo "memberID:".$row{'id'}." firstName:".$row{'model'}."lastName: ". //display the results
   	$row{'lastName'}."<br>";
?>
	
	?>
	
</head>
<body>



</body>
</html>
