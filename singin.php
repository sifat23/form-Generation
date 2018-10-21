<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<form action="s.php" method="post">
					 <label>Email</label>
				    <div class="form-group pass_show"> 
		                <input type="email" class="form-control" name="email"> 
		            </div> 
				    <label>Enter Password</label>
		            <div class="form-group pass_show"> 
		                <input type="password" class="form-control" name="pass1"> 
		            </div>
		            <label>Confirm Password</label>
		            <div class="form-group pass_show"> 
		                <input type="password" class="form-control" name="pass2"> 
		            </div>

		            <div class="row">
		            	<div>
		            		<input type="submit" class="btn btn-success" name="submit" value="Singup">
		            	</div>
		            	<div>
		            		<p><span> Already Have an account? </span><a href="login.php">Sing In</a></p>
		            	</div>
		            </div>

				</form>
			</div>
		</div>
	</body>
</html>