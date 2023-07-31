<?php
require_once 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$error_msg = [];
	$flag = 0;
	$user_found = [];
	// validation username
	if (!empty($username)) {
		if (strlen($username) >= 4) {
			if (preg_match('/^[a-zA-Z][\w]{2,23}[0-9a-zA-Z]$/', $username)) {
				$flag++;
			} else {
				$error_msg[] = 'sorry, you must wirte a correct pattern';
			}
		} else {
			$error_msg[] = 'sorry, you must wirte more than 4 character';
		}
	} else {
		$error_msg[] = 'sorry, the input field name is empty';
	}
	// validation email
	if (!empty($email)) {
		if (preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix', $email)) {
			$flag++;
		} else {
			$error_msg[] = 'sorry, you must wirte accorect valide email';
		}
	} else {
		$error_msg[] = 'sorry, the input field email is empty';
	}
	// validation password
	if (!empty($password)) {
		if (strlen($password) >= 7) {
			if (preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/', $password)) {
				$flag++;
			} else {
				$error_msg[] = 'sorry, you must wirte upper letter ,small letter and, specail crachter and number in password';
			}
		} else {
			$error_msg[] = 'sorry, you must wirte more than 6 character in password';
		}
	} else {
		$error_msg[] = 'sorry, the input field password is empty';
	}
	if ($flag == 3) {
		$stmt = "SELECT * FROM users";
		$q = mysqli_query($connection, $stmt);
		while ($user = mysqli_fetch_assoc($q)) {
			if ($user['username'] == $username && $user['email'] == $email) {
				$user_found[] = 'yes';
			} else {
				$user_found[] = 'no';
			}
		}
		if (in_array('yes', $user_found)) {
			$error_msg[] = 'this account is Exist';
		} else {
			$stmt = "INSERT INTO users( username, email, password) VALUES ('$username', '$email', '$password')";
			mysqli_query($connection, $stmt);
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>CodePen - A Pen by Mohithpoojary</title>
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
	<link rel="stylesheet" href="./style.css">

</head>

<body>
	<!-- partial:index.partial.html -->
	<div class="container">
		<div class="screen">
			<div class="screen__content">
				<p>Sing Up</p>
				<form class="login" action="" method="post">
					<div class="login__field">
						<i class="login__icon fas fa-user"></i>
						<input type="text" class="login__input" placeholder="User name" name="username">
					</div>
					<div class="login__field">
						<i class="login__icon fas fa-user"></i>
						<input type="text" class="login__input" placeholder="Email" name="email">
					</div>
					<div class="login__field">
						<i class="login__icon fas fa-lock"></i>
						<input type="password" class="login__input" placeholder="Password" name="password">
					</div>

					<button class="button login__submit">
						<span class="button__text"><input type="submit" value="singup"></span>
						<i class="button__icon fas fa-chevron-right"></i>
					</button>
				</form>
				<button class="button login__submit">
					<span class="button__text"><a href="login.php">login</a></span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>

				<?php
				if (!empty($error_msg)) {
					foreach ($error_msg as $error) {
				?>
						<p><?= $error ?></p>
				<?php
					}
				}
				?>
			</div>
			<div class="screen__background">
				<span class="screen__background__shape screen__background__shape4"></span>
				<span class="screen__background__shape screen__background__shape3"></span>
				<span class="screen__background__shape screen__background__shape2"></span>
				<span class="screen__background__shape screen__background__shape1"></span>
			</div>
		</div>
	</div>
	<!-- partial -->

</body>

</html>