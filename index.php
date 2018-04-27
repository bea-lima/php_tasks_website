<?Php
 include 'tasks.php';
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
	    			<h2>Tasks</h2>
					<?php
						if ($tasks == NULL) {
							echo "No tasks!";
						}else{
							foreach($tasks as $task){
								$name = $task["name"];
								$id = $task["id"];
					?>			
								<ul>
									<li>
										<a href="index.php?task_id=<?php echo $id ?>"><?php echo $name ?></a>
									</li>
								</ul>
					<?php
							}
						}
					?>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-12">
	    			<h2>Create New Task</h2>
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
