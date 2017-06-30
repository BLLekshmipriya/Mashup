<!DOCTYPE html>
<html>
<head>
	<title>Event Registration Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<style type="text/css">
		.textDesign{

			border-radius: 0px;
			border: 1px solid #DF004F;
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
		a{
			font-family: URW Gothic L;
			font-size: 25px;
			color: #fff;
			margin-top: 15px;
			margin-bottom: 200px;
		
		}
		a:hover{
			color: #fff;
		}

	</style>
</head>
<body >
<?php
if ($_POST) { ?>
	<div class="container-fluid">
		<div class="row" style="background-color: #910033;">
			<div class="col-xs-12">
				<h2 style="color: #fff;text-align: center;margin: 50px;padding: 30px;">You have successfully registered...!!!</h2>
				<h3 style="color: #fff;text-align: center;margin: 30px;padding: 30px;">Your details are given below. Please note the ID for future reference...!!!</h3>
			</div>
		</div>
	</div>
<?php
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
	
	$sql = "INSERT INTO `eventreg` (name, email, phone, gender, event) 
			VALUES (\"$name\", \"$email\", \"$phone\", \"$gender\",\"$event\")";

	if ($conn->query($sql) === TRUE) {
		$last_id = $conn->insert_id;

	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$sql="SELECT * FROM `eventreg` WHERE id='$last_id'";
	$result = mysqli_query($conn, $sql);
		 if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

    	echo "ID  : " . $row["id"];
    	echo "Name  : " . $row["name"];
    	echo "\n Email  : ".$row["email"];
    	echo "\nPhone  :".$row["phone"];
    	echo "\nGender  :".$row["gender"];
    	echo "\nEvent  :".$row["event"];
    }
} else {
    echo "0 results";
}

$conn->close();
} else { ?>
	<div class="container-fluid">
		<div class="row" style="background-color: #910033;">
			<div class="col-xs-12 " style="text-align: center;width: 100% !important;text-align: center;color: #fff;font-size: 50px;text-align: center;vertical-align: middle;margin: 30px;	font-family: URW Gothic L;" > Event Registration
				
			</div>	
		</div>
		<div class="row" style="background-color: #DF004F;"> 
			<div class="col-xs-12 col-xs-offset-4" style="text-align: center;width: 100% !important;max-width: 400px;border: 1px solid #DF004F;padding: 50px;">

				
				<form action="eventregform.php" method="POST" >
					<div class="form-group">
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
				<select style="margin-top: 12px;float: right;border-radius: 0px;border:1px solid #DF004F;font-size: 17px;" name="event">
					<option>-Select an event-</option>
					<option>Cyber Security</option>
					<option>Artificial Intelligence</option>
					<option>Mechine Learning</option>
					<option>Virtual Reality</option>
					<option>Robotics</option>
					<option>Mobile App Development</option>
				</select>
				
				<br>
				<button style="width: 100%;margin-top: 20px;background-color: #DF004F;border: 1px solid #DF004F;font-size: 30px;color: #fff;margin-bottom: 40px">Register</button>
				</form>
			</div>
		</div>
		<div class="row" style="background-color: #DF004F;">
			<div class="col-xs-6 ">
				<a href="http://localhost/eventupdate.php" style="margin-left: 100px;">Click here to update...!!!</a>
			</div>
			<div class="col-xs-6 ">
				<a href="http://localhost/eventdelete.php" style="margin-left: 250px;">Click here to delete...!!!</a>
			</div>
		</div>
		
	</div>
<?php
}
?>
</body>
</html>