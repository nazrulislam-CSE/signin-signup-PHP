<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="css/frontend/style.css">
</head>
<body>
	<?php include('layouts/header.php') ?>
	<?php include('config.php') ?>

	<section class="regForm">
		<h2>Login Form</h2>	

		<?php 

		if (isset($_POST['login'])) {

			$email = $_POST['email'];
			$pass = $_POST['pass'];

			$sql = "SELECT * FROM reg WHERE email='$email' AND password='$pass' ";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {

				$rows = $result->fetch_assoc();

				echo "<div class='message'><p class='success'>Successfully Login Redirecting...</p></div>";
				setcookie('admin', $rows['email']);
				header('refresh:1 admin/dashboard.php');
			}else{
				echo "<div class='message'><p class='error'>Sorry! Username Or Password is Incorrect</p></div>";
			}

		}

		?>

		<form action="" method="post">
			<input type="email" name="email" placeholder="Enter Your Email.." required><br><br>
			<input type="password" name="pass" placeholder="Enter Your Pass.." required><br><br>
			<input type="submit" name="login" value="Login">
		</form>
	</section>

</body>
</html>