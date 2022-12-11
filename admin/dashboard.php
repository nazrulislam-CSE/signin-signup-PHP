<?php 

if (isset($_COOKIE['admin'])) {
	
	$admin = $_COOKIE['admin'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
	<style>
		body{
			background-color: #34495E;
			color: white;
		}
	</style>
</head>
<body>
	<h1>Hi! <?php echo $admin; ?> Welcome To Our Admin Panel</h1>
</body>
</html>

<?php 
}else{
	header('Location: ../login.php');
}
?>


