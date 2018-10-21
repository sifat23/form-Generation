<?php
include 'conn.php';
	
	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$pass1 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];

		if ($pass2 == $pass1) {
			mysqli_query($conn, "INSERT INTO signup (email, password) VALUES ('$email', '$pass2')");
		} else {
			echo "password is not match";
		}
	}
?>