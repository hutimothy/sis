<?php
	if(isset($_POST['register']))
	{
		$student_no1 = $_POST['sid'];
		$LastName = $_POST['ln'];
		$FirstName = $_POST['fn'];
		$Email = $_POST['email'];
		$Password = $_POST['pwd'];
		$Birthdate = $_POST['bday'];

	}
	else
	{
		header('location: register.php');
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Welcome User</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" />
	</head>
	<body>
		<div class="container">
			<h1 class="text-center">Student Profile Page</h1>
			<div class="col-lg-6">
				<div class="well">
					
				</div>
			<div class="col-lg-6">
				<div class="well">

				</div>
			</div>
		</div>
	</body>
</html>