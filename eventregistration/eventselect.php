<!DOCTYPE html>
<html>
<head>
	<title>Event Selection</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
		.head{
			font-family: URW Gothic L;
			color: #fff;
			text-align: center;
			font-size: 50px;
			background-color: #910033;
			vertical-align: middle;
			margin: 30px;
		}
		.formStyle{
			font-family: URW Gothic L;
			color: #fff;
			text-align: center;
			background-color: #DC0055;
			vertical-align: middle;
			height:100%;
			font-size: 30px;
		}
	</style>
</head>
<body>

<?php
	if ($_POST) {?>
		<h2 class="head">List of Delegates</h2>
<?php	
	$event=$_POST['event'];

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "test";
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
		$sql="SELECT * FROM `eventreg` WHERE event='$event'";
		//echo $event;die;
		$result = mysqli_query($conn, $sql);
		 if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Id: " . $row["Id"]. " - Name: " . $row["name"]."\n";
       
    }
} else {
    echo "0 results";
}
$conn->close();

	} else {?>
		
		<div class="container-fluid">
			<div class="row" style="background-color: #910033;">
				<div class="col-xs-12">
					<h1 class="head">Do you want to delete your presence...!!!</h1>
				</div>
			</div>
			<div class="row" class="formStyle" style="height: 600px;background-color: #DF004F;">
				<div class="col-xs-12">
					<form action="eventselect.php" method="POST" class="formStyle">
						<label style="margin: 50px;">Select an Event </label><br>
								<select  name="event" style="background-color:#EF3C7B;border-radius: 0px;border:1px solid #DC0055;margin-bottom: 50px; ">
									<option >-Select an event-</option>
									<option>Cyber Security</option>
									<option>Artificial Intelligence</option>
									<option>Mechine Learning</option>
									<option>Virtual Reality</option>
									<option>Robotics</option>
									<option>Mobile App Development</option>
								</select>
								<br>
						<button style="background-color:#DC0055;border-radius: 0px;border:1px solid #DC0055;width: 25% ">Submit</button>
					</form>
					
				</div>

			</div>
			
		</div>





<?php
	}
	

?>


</body>
</html>