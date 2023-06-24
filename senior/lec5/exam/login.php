<?php
require_once 'users_data.php';
if (isset($_POST['username']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email'])) {
  foreach ($users as $user) {
    if ($user['name'] == $_POST['username'] && $user['email'] == $_POST['email'] && $user['password'] == $_POST['password']) {
      header('location: index.php');
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    html,
    body {
      display: grid;
      height: 100%;
      width: 100%;
      place-items: center;
      background: #f2f2f2;
      /* background: linear-gradient(-135deg, #c850c0, #4158d0); */
    }

    ::selection {
      background: #4158d0;
      color: #fff;
    }

    .wrapper {
      width: 380px;
      background: #fff;
      border-radius: 15px;
      box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1);
    }

    .wrapper .title {
      font-size: 35px;
      font-weight: 600;
      text-align: center;
      line-height: 100px;
      color: #fff;
      user-select: none;
      border-radius: 15px 15px 0 0;
      background: linear-gradient(-135deg, #c850c0, #4158d0);
    }

    .wrapper .mainform {
      padding: 10px 30px 50px 30px;
    }

    .wrapper .mainform .field {
      height: 50px;
      width: 100%;
      margin-top: 20px;
      position: relative;
    }

    .wrapper .mainform .field input {
      height: 100%;
      width: 100%;
      outline: none;
      font-size: 17px;
      padding-left: 20px;
      border: 1px solid lightgrey;
      border-radius: 25px;
      transition: all 0.3s ease;
    }

    .wrapper .mainform .field input:focus,
    .mainform .field input:valid {
      border-color: #4158d0;
    }

    .wrapper .mainform .field label {
      position: absolute;
      top: 50%;
      left: 20px;
      color: #999999;
      font-weight: 400;
      font-size: 17px;
      pointer-events: none;
      transform: translateY(-50%);
      transition: all 0.3s ease;
    }

    .mainform .field input:focus~label,
    .mainform .field input:valid~label {
      top: 0%;
      font-size: 16px;
      color: #4158d0;
      background: #fff;
      transform: translateY(-50%);
    }

    .mainform .content {
      display: flex;
      width: 100%;
      height: 50px;
      font-size: 16px;
      align-items: center;
      justify-content: space-around;
    }

    .mainform .content .checkbox {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .mainform .content input {
      width: 15px;
      height: 15px;
      background: red;
    }

    .mainform .content label {
      color: #262626;
      user-select: none;
      padding-left: 5px;
    }

    .mainform .content .pass-link {
      color: "";
    }

    .mainform .field input[type="submit"] {
      color: #fff;
      border: none;
      padding-left: 0;
      margin-top: -10px;
      font-size: 20px;
      font-weight: 500;
      cursor: pointer;
      background: linear-gradient(-135deg, #c850c0, #4158d0);
      transition: all 0.3s ease;
    }

    .mainform .field input[type="submit"]:active {
      transform: scale(0.95);
    }

    .mainform .signup-link {
      color: #262626;
      margin-top: 20px;
      text-align: center;
    }

    .mainform .pass-link a,
    .mainform .signup-link a {
      color: #4158d0;
      text-decoration: none;
    }

    .mainform .pass-link a:hover,
    .mainform .signup-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <!DOCTYPE html>
  <!-- Created By CodingNepal -->
  <html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div class="wrapper">
      <div class="title">
        Login Form
      </div>
      <div class="mainform">
        <form action="" method="post">
          <div class="field">
            <input type="text" name="username" required>
            <label>Username</label>
          </div>
          <div class="field">
            <input type="text" name="email">
            <label>Email Address</label>
          </div>
          <div class="field">
            <input type="password" name="password" required>
            <label>Password</label>
          </div>

          <div class="field">
            <input type="submit" value="Login" required>
          </div>
        </form>
      </div>
    </div>
  </body>

  </html>
</body>

</html>