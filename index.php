<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Contact Details </title>
</head>
<body>
	<form method="post" action="">
	<h1>User Contact Details</h1>
	<label for="name">Name:</label>
	<input type="text" id="name" name ="name" placeholder="enter your name">
	<label for="phone">Phone.No:</label>
	<input type="Tel" id="phone" name="phone" placeholder="enter your phone number">
	<label for="email">Email:</label>
	<input type ="email" id="email" name ="email"placeholder="enter your email">
	<label for="subject">Subject:</label>
	<input type="text" id="subject" name="subject" placeholder="Enter your subject">
	<label for="message">Message:</label>
	<input type ="text" id="message" name="message" placeholder="Enetr your message">
	<button type="submit">Submit</button>
</form>


	<?php

if(isset($_POST['submit'])) {
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
  
	$query = "INSERT INTO IpData ()
	VALUES ('$name','$phone','$email','$subject','$message')";
  
	  if (!mysqli_query($dbconnect, $query)) {
		  die('An error occurred. Data is not updated sucessfully.');
	  } else {
		echo "Data successfully added.";
	  }
  
  }

	?>
	

</body>
</html>