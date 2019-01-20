<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
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
body {
	margin: 0;
	left:0;
	top:0;
}

.active {
  background-color: #4CAF50;
}
</style>
	
</head>
<body >
	
	<nav class="menu">
		<ul>
			<li><a  href="TACTOE.HTML">HOME</a></li>
			<li><a class="active" href="contactus.php">CONTACT US</a></li>
			<li><a href="LISTING.php">LISTING PAGE</a></li>
		</ul>
		
	</nav>
<h1>	 ENTTER THE DETAILS BELOW</h1>

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

			if(isset($_POST["submit"])){
					$first_name = $_POST["first_name"];
					$last_name= $_POST["last_name"];
					$email = $_POST["email"];
					$phone_number = $_POST["phone_number"];
			

			$sql = "INSERT INTO info (first_name , last_name , email , phone_number)
			VALUES ('$first_name', '$last_name', '$email', '$phone_number')";

			if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
			}
			$conn->close();
		?>
	<form action="" method="post">
	<table>
		    <tr>
			<td>First Name:</td>
		    <td><input type="text" name="first_name" id="t1"></td>
	        </tr>

		    <tr>
			<td>Last Name:</td>
			<td><input type="text" name="last_name" id="t2"></td>
			</tr>
        
       
            <tr>
			<td>Email:</td>
			<td><input type="text" name="email" id="t3"></td>
			</tr>
        
            <tr>
			<td>Phone Number:</td>
			<td><input type="text" name="phone_number" id="t44"></td>
			</tr>

			<tr>
			<td><input type="submit" name="submit"></td>
			</tr>
            </table>
            </form>



	</BODY>
</head>
</html>

