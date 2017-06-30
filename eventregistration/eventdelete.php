<!DOCTYPE html>
<html>
<head>
	<title>Event Deletion</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
		.head{
			font-family: URW Gothic L;
			color: #fff;
			text-align: center;
			font-size: 50px;
			background-color: #006363;
			vertical-align: middle;
			margin: 30px;
		}
		.formStyle{
			font-family: URW Gothic L;
			color: #fff;
			text-align: center;
			background-color: #009999;
			vertical-align: middle;
			height:100%;
			font-size: 30px;
		}
	</style>
</head>
<body>
<?php
if ($_POST) {?>
	<div class="container-fluid">
		<div class="row" style="background-color: #006363;">
			<div class="col-xs-12">
				<h2 style="color: #fff;text-align: center;margin: 50px;padding: 30px;">You have successfully deleted your presence...!!!</h2>
				
			</div>
		</div>
	</div>

<?php
	$Id=$_POST['Id'];

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "test";
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "DELETE FROM `eventreg` WHERE id='$Id'";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
} else {?>

	<div class="container-fluid">
		<div class="row" style="background-color: #006363;">
			<div class="col-xs-12">
				<h1 class="head">Do you want to delete your presence...!!!</h1>
			</div>
		</div>
		<div class="row" style="background-color: #009999;height: 600px;">
			<div class="col-xs-12">
				<form action="eventdelete.php" method="POST" class="formStyle">
				<label style="margin: 50px;" >Enter your Id</label>
				<br> 
				<input type="text" name="Id"  style="border-radius: 0px;border: 1px solid #009999;margin-bottom: 50px;color:black;" >
				<br>
				<button style="background-color:#009999;border-radius: 0px;border:1px solid #009999;width: 25% ">Delete</button>
				</form>
				
			</div>
		</div>
	</div>


<?php	
}

?>


</body>
</html>