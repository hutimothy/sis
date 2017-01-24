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
		<link href="css/style1.css" rel="stylesheet" />
	</head>
	<body>
		<div class="container">
			<h1 class="text-center"><font color="white">Student Profile Page</font></h1>
			<div class="col-lg-offset-3 col-lg-6">
				<div class="well">
					<p>ID Number: <?php echo $student_no1 ?></p>
					<p>Name: <?php echo $LastName .", " . $FirstName ?></p>
					<p>Email: <?php echo $Email ?></p>
					<p>Birthdate: <?php echo $Birthdate ?></p>
					<p>Time: <?php echo date('c') ?></p>
				</div>
		</div>
	</body>
</html>