<?php
include("../php/db_conn.php");

if (isset($_GET['show'])) {
    switch ($_GET['show']) {
        case 'vacancy':
            $sql = "select u.name as 'uname', v.* from vacancy v, user u where v.username=u.username order by u.name;";
            $result = mysqli_query($conn, $sql) or die($conn->error);
            break;
        case 'employer':
            $sql = "select u.username, u.name, u.email, u.telephone, e.website, e.companyname from user u, employer e where u.username=e.username;";
            $result = mysqli_query($conn, $sql) or die($conn->error);
            break;
        case 'applicant':
            $sql = "SELECT * FROM user where view = 'Applicant';";
            $result = mysqli_query($conn, $sql) or die($conn->error);
            break;
        default:
            break;
    }
}
if (isset($_GET['deleteV'])) {
    $id = $_GET['deleteV'];
    $sql = "delete from vacancy where vacancyId = $id;";
    mysqli_query($conn, $sql) or die($conn->error);
    header("Location: ./vacancy.php?show=vacancy");
}
if (isset($_GET['deleteA'])) {
    $id = $_GET['deleteA'];
    $sql = "delete from user where username = \"$id\";";
    mysqli_query($conn, $sql) or die($conn->error);
    header("Location: ./applicant.php?show=applicant");
}
if (isset($_GET['deleteE'])) {
    $id = $_GET['deleteE'];
    $sql = "delete from user where username = \"$id\";";
    mysqli_query($conn, $sql) or die($conn->error);
    header("Location: ./employer.php?show=employer");
}
