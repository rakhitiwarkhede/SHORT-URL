<?php
ob_start();
include("dbconnect.php");

?>
<html>
  <head>
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="style.css">

	
  </head>
  <body>
    <div class="container background">
      <div class="row">    
		<div class="col-sm-12" style="width:130%">
			<h1 class="text-center">URL Shortener</h1>
			<div class="panel panel-default">
			<div class="panel-body">
			<form class="" name="form1" method="post" action="short.php">
				<div class="form-group">
				  <label class="control-label " for="email">URL :</label>
				  
					<input type="URL" class="form-control" id="url" placeholder="Enter Long URL" name="txturl" required>
				 
				</div>
				
				<div class="form-group">        
				  	<button type="submit" class="btn btn-default">Submit</button>
				  
				</div>
			 </form>
			 </div>
			 </div>
		</div>
      </div>
    </div>
  </body>
</html>
