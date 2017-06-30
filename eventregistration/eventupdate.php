<!DOCTYPE html>
<html>
<head>
	<title>Event Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<style type="text/css">
		.textDesign{

			border-radius: 0px;
			border: 1px solid #8F04A8;
			margin-top: 5px;
			margin-bottom: 15px;
			padding: 6px 8px;
			font-family: URW Gothic L;
			
			float: right;

			
		}
		.labelDesign{

			float: left;
			font-size: 20px;
			font-family: URW Gothic L;
			font-weight: bold;
			margin-top: 10px;
			margin-bottom: 15px;
			color: #fff;
			
		}
		.buttonDesign{
			font-size: 15px;
			font-family: URW Gothic L;
			font-weight: bold;
			margin-top: 15px;
			margin-bottom: 15px;
			color: #fff;
			
		}
		.row{
			
		}

	</style>
</head>
<body>
<?php
if ($_POST) { ?>
	<div class="container-fluid">
		<div class="row" style="background-color: #5D016D;">
			<div class="col-xs-12">
				<h2 style="color: #fff;text-align: center;margin: 50px;padding: 30px;">You have successfully updated...!!!</h2>
				
			</div>
		</div>
	</div>
<?php
	$id=$_POST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$gender=$_POST['gender'];
	$event=$_POST['event'];

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "test";
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
	
	$sql = "UPDATE eventreg SET name='$name', email='$email',phone='$phone',gender='$gender',event='$event' WHERE Id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
} else { ?>	
	<div class="container-fluid">
		<div class="row" style="background-color: #5D016D;">
			<div class="col-xs-12 " style="text-align: center;width: 100% !important;text-align: center;color: #fff;font-size: 50px;text-align: center;vertical-align: middle;margin: 30px;	font-family: URW Gothic L;" > Update your profile...!!!
				
			</div>	
		</div>
		<div class="row" style="background-color: #8F04A8;"> 
			<div class="col-xs-12 col-xs-offset-4" style="text-align: center;width: 100% !important;border: 1px solid #8F04A8;padding: 50px;max-width: 400px">

				
				<form action="eventupdate.php" method="POST" >
					<div class="form-group">
				<label class="labelDesign">Id:</label><input type="text" name="id" class="textDesign" ><br><br><br>
				<label class="labelDesign">Name:</label><input type="text" name="name" class="textDesign" ><br>
				<label class="labelDesign">Email:</label><input type="text" name="email" class="textDesign"><br>
				<label class="labelDesign">Phone no:</label><input type="text" name="phone" class="textDesign">
				
				
				</div>
				<label class="labelDesign">Gender: </label>
				<div style="display: inline-block;">
				<input type="radio" name="gender" value="male">
				<label class="buttonDesign">Male</label>
				<input type="radio" name="gender" value="female">
				<label class="buttonDesign">Female</label>
				<input type="radio" name="gender" value="other">
				<label class="buttonDesign">Other</label>
				</div>
				<br><br>
				<label class="labelDesign">Event :</label>
				<select style="margin-top: 12px;float: right;border-radius: 0px;border:1px solid #8F04A8;font-size: 17px;" name="event">
					<option>-Select an event-</option>
					<option>Cyber Security</option>
					<option>Artificial Intelligence</option>
					<option>Mechine Learning</option>
					<option>Virtual Reality</option>
					<option>Robotics</option>
					<option>Mobile App Development</option>
				</select>
				
				<br>
				<button style="width: 100%;margin-bottom: 100%;margin-top: 20px;background-color: #8F04A8;border: 1px solid #8F04A8;font-size: 30px;color: #fff;">Update</button>
				</form>
			</div>
		</div>
	</div>
<?php
}
?>	
</body>
</html>