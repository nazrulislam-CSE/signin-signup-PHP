<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up</title>
	<link rel="stylesheet" href="css/frontend/style.css">
</head>
<body>
	<?php include('layouts/header.php') ?>

	<section class="regForm">
		<h2>Registration Form</h2>
		
		<form action="" method="post">
			<input type="email" name="email" placeholder="Enter Your Email.." required><br><br>
			<input type="password" name="pass" placeholder="Enter Your Pass.." required><br><br>
			<input type="submit" name="login" value="Registration">
		</form>
	</section>

</body>
</html>