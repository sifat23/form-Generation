<?php
include 'conn.php';
	
	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$pass = $_POST['password'];
		
		$query = mysqli_query($conn, "SELECT * FROM signup WHERE email='$email' AND password='$pass'");
				if (mysqli_num_rows($query) > 0) {
					header('Location: form.php');
				}
				else {
					$message = "The email and password is incorrect";
					echo "<script type='text/javascript'>alert('$message');</script>";
				}
	}
?>