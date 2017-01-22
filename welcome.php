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
	<body style="background='https://upload.wikimedia.org/wikipedia/en/b/b2/CSB-Facade.JPG'">
		<div class="container">
			<h1 class="text-center">Student Profile Page</h1>
			<div class="col-lg-6">
				<div class="well">
					<p>ID Number: <?php echo $student_no1 ?></p>
					<p>Name: <?php echo $LastName .", " . $FirstName ?></p>
					<p>Email: <?php echo $Email ?></p>
					<p>Birthdate: <?php echo $Birthdate ?></p>
					<p>Time: <?php echo date('c') ?></p>
				</div>
			<div class="col-lg-6">
				<div class="well">

				</div>
			</div>
		</div>
	</body>
</html>