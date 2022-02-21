<?php
    include("../php/db_conn.php");
    $username = $_SESSION['uName'];

    if($_GET['show']=='vacancy'){
        $sql = "select v.vacancyId, v.name, e.companyname, v.minqualification, v.details from vacancy v, employer e where v.username = e.username and v.vacancyId not in(select vacancyId from applies where username = \"$username\");";
        $result = mysqli_query($conn, $sql) or die($conn->error);
    }
    if($_GET['show']=='pending'){
        $sql = "select v.vacancyId, v.name, e.companyname, e.website, u.telephone from vacancy v, employer e, user u where u.username = e.username and v.username = e.username and v.vacancyId in(select vacancyId from applies where username = \"$username\");";
        $result = mysqli_query($conn, $sql) or die($conn->error);
    }
    if(isset($_GET['apply'])){
        $id = $_GET['apply'];
        $sql = "insert into applies(username, vacancyId) values(\"$username\", \"$id\");";
        $result = mysqli_query($conn, $sql) or die($conn->error);
        header("Location: ./vacancies.php?show=vacancy");
    }
    if(isset($_GET['tickoff'])){
        $id = $_GET['tickoff'];
        $sql = "delete from applies where username=\"$username\" and vacancyId=\"$id\";";
        $result = mysqli_query($conn, $sql) or die($conn->error);
        header("Location: ./pending.php?show=pending");
    }
?>