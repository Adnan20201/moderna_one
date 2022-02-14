<?php
session_start();


?>
<!DOCTYPE html>
<html>

<head>
	<title>Creative Colorlib SignUp Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- Custom Theme files -->
	<link href="./inc/css/singup_form.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->
	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!-- //web font -->
</head>

<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Creative SignUp Form</h1>
		<div class="main-agileinfo shadow-lg rounded">

			<?php
			if (isset($_SESSION['success'])) {
			?>
				<span class="alert alert-danger">
					<?= $_SESSION['success'] ?>
				</span>
			<?php
			}
			?>

			<div class="agileits-top">

				<form action="./singup_store.php" method="post" enctype="multipart/form-data">

					<input class="text" type="text" name="name" placeholder="Username">
					<span class="text-danger">
						<?= isset($_SESSION['error_name']) ? $_SESSION['error_name'] : '' ?>
					</span>

					<input class="text email" type="email" name="email" placeholder="Email">
					<span class="text-danger">
						<?= isset($_SESSION['error_email']) ? $_SESSION['error_email'] : '' ?>
					</span>

					<input class="text" type="password" name="password" placeholder="Password">
					<span class="text-danger">
						<?= isset($_SESSION['error_password']) ? $_SESSION['error_password'] : '' ?>
					</span>

					<input class="text w3lpass" type="password" name="confirm_password" placeholder="Confirm Password">
					<span class="text-danger">
						<?= isset($_SESSION['error_confirm_password']) ? $_SESSION['error_confirm_password'] : '' ?>
					</span>

					<input class="profile_img" type="file" id="" name="profile_img" placeholder="Profile_img">
					<span class="text-danger">
						<?= isset($_SESSION['error_profile_img']) ? $_SESSION['error_profile_img'] : '' ?>
					</span>


					<input class="btn" type="submit" name="submit">

				</form>
				<p>Don't have an Account?</p>
				<a class="text-decoration-none d-block w-75" style="background:#21556A; color:#fff; padding: 10px 50px;border-radius: 50px; " href="./index.php">
					<h5>Login Now!</h5>
					<i class="fa-arrow-right text-white"></i>
				</a>

			</div>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>

</html>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php

session_unset();
