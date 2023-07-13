<?php
$myConn = mysqli_connect('localhost', 'root', '', 'hr_db');
$statme = "SELECT * FROM employees LIMIT 10";
$employess = mysqli_query($myConn, $statme);
$final_emps = mysqli_fetch_assoc($employess);
$erooo = mysqli_error($myConn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <?php
    while ($emp = mysqli_fetch_assoc($employess)) {
    ?>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">First Name : <?= $emp['first_name'] ?></h5>
                <h6 class="card-subtitle mb-2 text-muted">Email : <?= $emp['email'] ?></h6>
                <p class="card-text">Phone : <?= $emp['phone_number'] ?></p>
                <a href="#" class="card-link">Salary : <?= $emp['salary'] ?></a>
                <a href="#" class="card-link">ID : <?= $emp['employee_id'] ?></a>
            </div>
        </div>
    <?php
    }
    ?>
    <script src="bootstrap.min.js"></script>
</body>

</html>