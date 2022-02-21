<?php
include("../php/db_conn.php");
$username = $_SESSION['uName'];
if (isset($_GET['show'])) {
    switch ($_GET['show']) {
        case 'vacancy':
            $sql = "SELECT * FROM vacancy where username = '$username';";
            $result = mysqli_query($conn, $sql) or die($conn->error);
            break;
        case 'create':
            $name = $_POST['vacancy_name'];
            $detail = $_POST['details'];
            $qual = $_POST['min_quallification'];
            $sql = "INSERT INTO vacancy(username, name, details, minqualification) VALUES(\"$username\", \"$name\",\"$detail\", \"$qual\");";
            mysqli_query($conn, $sql) or die($conn->error);
            header("Location: ./vacancies.php?show=vacancy");
            break;
        case 'applicant':
            $sql = "SELECT * FROM vacancy where username = '$username';";
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
    header("Location: ./vacancies.php?show=vacancy");
}
if (isset($_GET['showV'])) {
    $id = $_GET['showV'];
    $sql = "select * from vacancy where vacancyId = $id;";
    mysqli_query($conn, $sql) or die($conn->error);
    header("Location: ./vacancies.php?show=vacancy");
}
if (isset($_GET['updateV'])) {
    $id = $_GET['updateV'];
    $name = $_POST['vacancy_name'];
    $detail = $_POST['details'];
    $qual = $_POST['min_quallification'];
    $sql = "UPDATE vacancy SET name = '$name', details = '$detail', minqualification = '$qual' where vacancyId = $id;";
    mysqli_query($conn, $sql) or die($conn->error);
    header("Location: ./vacancies.php?show=vacancy");
}
