<?php
session_start();
$error = "";
include('../php/employer_signup.php');
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../css/style2.css">
</head>

<body>
  <div class="container">
  <div class="title"><?php echo $error ?></div>
    <div class="title">Sign Up - I'm an employer</div>
    <div class="content">
      <form action="" name="sign_up" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="employer_name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="user_name" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Company Name</span>
            <input type="text" name="cName" placeholder="Enter your company name" required>
          </div>
          <div class="input-box">
            <span class="details">Company Website</span>
            <input type="text" name="website" placeholder="Enter your company website" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="telephone" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="e_mail" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" name="confirm_pass" placeholder="Confirm your password" required>
          </div>
        </div>

        <div class="button">
          <input name="submit" type="submit" value="Create an Account ">
        </div>
        <div class="login">
          <p>Already have an account? <a href="../index.php">Log in</a>.</p>
        </div>
      </form>
    </div>
  </div>

</body>

</html>