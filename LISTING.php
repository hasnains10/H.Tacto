<!doctype html>
<html>
<head>
<title>LISTING PAGE
</title>
	<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
	
</head>
<body >
	
	<nav class="menu">
		<ul>
			<li><a href="TACTOE.HTML">HOME</a></li>
			<li><a href="contactus.php">CONTACT US</a></li>
			<li><a class="active" href="LISTING.php">LISTING PAGE</a></li>
		</ul>
		
	</nav>

<H1>PEOLE WHO SUCCESSFULLY REGISTERED</H1>	

<?php
		$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "user1";

			// Create connection
			$conn = new mysqli($servername, $username, $password,$dbname);

			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 
			//echo "Connected successfully";

			$sql = "SELECT id, first_name  , last_name , email , phone_number  FROM info";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
			    }
			} else {
			    echo "0 results";
			}
			$conn->close();
			?>

</body>
</head>
</html>