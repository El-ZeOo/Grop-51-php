<?php
include "layout/header.php";
require_once '../config.php';
$page_name = 'Add User';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rank = $_POST['rank'];

    $error_msg = [];
    $user_found = [];

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
        $stmt = "INSERT INTO users( username, email, password, `rank`) VALUES ('$username', '$email', '$password', '$rank')";
        mysqli_query($connection, $stmt);
        header('LOCATION: user.php');
    }
}

?>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <?php
    include 'layout/sidebar.php';
    ?>
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <?php include "layout/navbar.php" ?>
        <!-- End Navbar -->
        <!-- Content -->
        <div class="card col-11 m-5">
            <div class="card-header pb-0">
                <div class="d-flex align-items-center">
                    <p class="mb-0">Edit Profile</p>
                    <button class="btn btn-primary btn-sm ms-auto">Settings</button>
                </div>
            </div>
            <div class="card-body">
                <p class="text-uppercase text-sm">User Information</p>
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Username</label>
                                <input class="form-control" type="text" name="username" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Email address</label>
                                <input class="form-control" type="email" name="email" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Password</label>
                                <input class="form-control" type="password" name="password" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <h6>Rank</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="rank" id="inlineRadio1" value="1">
                            <label class="form-check-label" for="inlineRadio1">Admin</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="rank" id="inlineRadio2" value="0" checked>
                            <label class="form-check-label" for="inlineRadio2">User</label>
                        </div>
                        <input class="btn btn-primary" type="submit" value="Save">
                </form>
            </div>
        </div>
        <!-- End Content -->
        <?php
        if (!empty($error_msg)) {
            foreach ($error_msg as $error) {
        ?>
                <div class="alert alert-danger"><?= $error ?></div>
        <?php
            }
        }
        ?>
    </main>
    <?php include "layout/footer.php"; ?>