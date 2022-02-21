<?php
session_start();
$error = "";
include("../php/applicant_signup.php");
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../css/style2.css">
  <script>
  var err = '<?php echo $error; ?>';
  if(err)
        alert(err);
</script>
</head>

<body>
  <div class="container">
    <div class="title">Sign Up - I'm an applicant</div>
    <div class="content">
      <form action="" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="applicant_name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="user_name" placeholder="Enter your username" required>
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
            <input type="password" name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="confirm_pass" placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="qualification-details">
          <input type="radio" name="min_qualification" id="dot-1" value="O/L">
          <input type="radio" name="min_qualification" id="dot-2" value="A/L">
          <input type="radio" name="min_qualification" id="dot-3" value="Diploma">
          <input type="radio" name="min_qualification" id="dot-4" value="Degree">
          <span class="qualification-title">Minimum Qualification</span>
          <div class="category">
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">O/L</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">A/L</span>
            </label>
            <label for="dot-3">
              <span class="dot three"></span>
              <span class="gender">Diploma</span>
            </label>
            <label for="dot-4">
              <span class="dot four"></span>
              <span class="gender">Degree</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Create an Account ">
        </div>
        <div class="login">
          <p>Already have an account? <a href="../index.php">Log in</a>.
          </p>
        </div>
      </form>
      
    </div>
  </div>

</body>

</html>
