<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<form action="f.php" method="post"> 
				    <select class="form-control" name="form">
				    	<option disabled selected hidden> Select One...</option>
				    	<option value="1">Vacation Leave Application</option>
				    	<option value="2">Short Leave Application</option>
				    	<option value="3">Leave of Absence Application</option>
				    </select>

				    <input type="submit" class="btn btn-success" value="Go >" name="option">
				</form>  
			</div>
		</div>
	</body>
</html>