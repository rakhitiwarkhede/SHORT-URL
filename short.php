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



	<?php
	//echo $_POST["txturl"];
$urlinput=mysql_real_escape_string($_POST['txturl']); 
$id=rand(10000,99999);
$shorturl=base_convert($id,20,36);
$fields=array('id','url','shortened');
$values=array($id,$urlinput,$shorturl);
$result=$short->insert($fields,$values);
?>
  </head>
  <body>
    <div class="container background">
      <div class="row">
        
		<div class="col-sm-12">
			<h1 class="text-center">URL Shorter</h1>
			<div class="panel panel-default">
			<div class="panel-body">
			<form class="" >				
				<div class="form-group">
					<label for="email">Shortened url is:</label>
					<label class="control-label" for="email"><a href="<?php echo $urlinput.$shorturl; ?>"><?php echo $urlinput.$shorturl; ?></a></label>
				  </div>
				
				
			 </form>
			 </div>
			 </div>
		</div>
      </div>
    </div>
  </body>
</html>
