<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


		
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a href="#" class="navbar-brand">KWS Search</a>
		</div>
	</nav>
	<div class="col-md-1"></div>
	<div class="col-md-10 well">
		<h3 class="text-primary">KWS Recruit Search</h3>
		<hr style="border-top:1px dotted #ccc;" />
		<div class="col-md-12">
			<form method="POST" action="">
				<div class="form-inline">
					<input type="text" class="form-control" name="keyword" placeholder="Search here..." required="required"/>
					<button class="btn btn-success" name="search">Search</button>
				</div>
			</form>
			<br /><br />
			<?php include'search.php'?>
		</div>
		<div class="col-md-4">
			
		</div>
	</div>
</body>
</html>