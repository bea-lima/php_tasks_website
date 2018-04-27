<?Php
 include 'tasks.php';
 print_r($tasks);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Tasks</title>
    	<meta charset="utf-8">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	</head>
  	<body>
	    <div class="container">
	    	<div class="row">
	    		<div class="col-md-12">
	    			<h2>Edit Task</h2>
	    		</div>
	    		<div class="col-md-12">
	    			<form class="form-inline" action="tasks.php" method="post">
			          	<div class="form-group">
			            	<label for="name">Task:</label>
			            	<input type="text" class="form-control" name="name" placeholder="Enter task" required>
			          	</div><br><br>
			          	<button type="submit" class="btn btn-default">Submit</button>
			        </form>
	    		</div>
	    	</div>
	    </div>
	</body>
</html>
