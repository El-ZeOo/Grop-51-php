<?php
require_once 'data.php';
if (isset($_POST['username'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$msg = [];
	$flag = 0;
	if (!empty($username)) {
		if (strlen($username) >= 4) {
			if (preg_match('/senior$/', $username)) {
				$flag++;
			} else {
				$msg[] = 'sorry, you must wirte a correct pattern';
			}
		} else {
			$msg[] = 'sorry, you must wirte more than 4 character';
		}
	} else {
		$msg[] = 'sorry, the input field name is empty';
	}
	if (!empty($password)) {
		if (strlen($password) >= 7) {
			if (preg_match('/[a-z]/', $username)) {
				$flag++;
			} else {
				$msg[] = 'sorry, you must wirte a correct pattern';
			}
		} else {
			$msg[] = 'sorry, you must wirte more than 6 character';
		}
	} else {
		$msg[] = 'sorry, the input field password is empty';
	}
	if ($flag == 2) {
		foreach ($users as $user) {
			if (in_array($username, $user)) {
				if ($username == 'adminsenior') {
					if ($password == 'Admin123') {
						header('location: dashbord.php');
					}
				} else {
					header("location: index.php?username=$username");
				}
			}
		}
	}
}
?>
<!doctype html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h3 class="mb-4 text-center">Have an account?</h3>
						<form action="#" class="signin-form" method="post">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Username" name="username">
							</div>
							<div class="form-group">
								<input id="password-field" type="password" class="form-control" placeholder="Password" name="password">
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Remember Me
										<input type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
							</div>
						</form>
						<p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
						<div class="social d-flex text-center">
							<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
							<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
						</div>
						<p style="color: red; font-size: 30px; text-align: center;">
							<?php
							if (!empty($msg)) {
								foreach ($msg as $m) {
									echo $m . '<br>';
								}
							}
							?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>