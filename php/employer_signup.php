<?php
if (count($_POST) > 0) {
    include("../php/db_conn.php");
    $uname = $_POST["user_name"];
    $password = $_POST["password"];
    $check = $_POST["confirm_pass"];
    $aName = $_POST["employer_name"];
    $email = $_POST['e_mail'];
    $telephone  = $_POST['telephone'];
    $website = $_POST['website'];
    $cName = $_POST['cName'];
    $sql = "SELECT * FROM user WHERE username = \"$uname\";";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid Email";
    } elseif ($password != $check) {
        $error = "Passwords don't match";
    } elseif (is_array($row)) {
        $error = "Username already exists";
    } else {
        $password=md5($password);
        $sql = "INSERT INTO user(username, password, view, name, email, telephone) VALUES(\"$uname\", \"$password\", \"Employer\", \"$aName\", \"$email\", \"$telephone\");";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO employer(username, website, companyname) VALUES(\"$uname\", \"$website\", \"$cName\");";
        mysqli_query($conn, $sql);

        $_SESSION['uName'] = $uname;
        $_SESSION['name'] = $aName;
        $_SESSION['view'] = "Employer";
        header("Location: ../index.php");
    }
}
