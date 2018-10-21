<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<form action="mypdf1.php" method="post"> 
				    
				    <label>Name</label>
				    <div class="form-group pass_show"> 
		                <input type="text" class="form-control" name="name"> 
		            </div> 

				    <label>Institute Name</label>
		            <div class="form-group pass_show"> 
		                <input type="text" class="form-control" name="inst"> 
		            </div>

		            <label>Department</label>
		            <div class="form-group pass_show"> 
		                <input type="text" class="form-control" name="dept"> 
		            </div>

		            <label>To</label>
		            <div class="form-group pass_show"> 
		                <input type="text" class="form-control" name="to"> 
		            </div>

		            <label>ID</label>
		            <div class="form-group pass_show"> 
		                <input type="text" class="form-control" name="p_id"> 
		            </div>

		            <label>Duration of Hollyday</label>
		            <div class="form-group pass_show"> 
		                <input type="text" class="form-control" name="days"> 
		            </div>

		            <label>Start Time</label>
		            <div class="form-group pass_show"> 
		                <input type="Date" class="form-control" name="s_date"> 
		            </div>

		            <label>End Time</label>
		            <div class="form-group pass_show"> 
		                <input type="Date" class="form-control" name="e_date"> 
		            </div>

				    <input type="submit" class="btn btn-success" value="Go >" name="go">
				</form>  
			</div>
		</div>
	</body>
</html>