<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<form action="l.php" method="post"> 
				    <label>Email</label>
				    <div class="form-group pass_show"> 
		                <input type="email" class="form-control" name="email"> 
		            </div> 
				    <label>Confirm Password</label>
		            <div class="form-group pass_show"> 
		                <input type="password" class="form-control" name="password"> 
		            </div>

		            <input type="submit" class="btn btn-success" value="Longin" name="submit">
				</form>  
			</div>
		</div>
	</body>
</html>