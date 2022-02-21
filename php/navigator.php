<?php
    $error ="";
    if(count($_POST) > 0){
        include("./php/db_conn.php");
        $sql = "SELECT * FROM user WHERE username = '".$_POST["user_name"]."' AND password = '".$_POST["password"]."';";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);

        if(is_array($row)){
            $_SESSION['uName'] = $row['username'];
            $_SESSION['view'] = $row['view'];
            $_SESSION['name'] = $row['name'];
        }
        else
            $error = "Invalid Username or Password";
    }

    if(isset($_SESSION['uName'])){
        if($_SESSION['view'] == "Admin"){
            header("Location: ./admin/home.php");
        }   
        elseif($_SESSION['view'] == "Employer"){
            header("Location: ./employer/home.php");
        }
        elseif (($_SESSION['view'] == "Applicant")) {
            header("Location: ./applicant/home.php");
        }
    }
?>