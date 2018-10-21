<?php
include 'conn.php';
	
	if (isset($_POST['option'])){

		$value = $_POST['form'];
		
		if ($value == 1) {
			header('Location: f1.php');	
		}
		elseif ($value == 2) {
				header('Location: f2.php');
			}
		elseif ($value == 3) {
				header('Location: f3.php');
		}
		else{
			echo "<p>You have to select a option first<p>";
		}
	}
?>