<?php
session_start();
// include("./db.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/navbar.css">
    <style>
        * {
            box-sizing: border-box;
            font-family: roboto;
        }

        body {
            margin: 0;
            background-image: url('background.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .column {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 20%;
            height: 300px;
            border-radius: 0.4rem;
            transition: all 0.5s ease-in;
            border: 0px;
            text-align: center;
            padding: 1rem;
            background-color: rgba(233, 233, 244, 0.3);
        }

        .column:hover {
            box-shadow: 0 0 0 2px #ddeeff;
            background-color: rgba(233, 233, 244, 0.6);
        }

        .column .header {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            display: d-flex;
            gap: 2rem;
            margin: 1rem;
            margin-top: 3rem;
        }

        button {
            font-weight: bolder;
            background-color: #FFf;
            border: 0;
            padding: 0.5rem;
            border-radius: 1rem;
            cursor: pointer;
            transition: all 0.5s ease-in;
        }

        button:hover {
            background-color: #111;
            color: #fff;
        }

        h1 {
            color: #fff;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a href="../logout.php">Log-Out</a></li>
            <li><a href="./home.php">Home</a></li>
        </ul>
    </nav>
    <div class="center">
        <h1>Hi <?php echo $_SESSION['name'] ?>!</h1>
    </div>
    <div class="container center">
        <div class="column transparent">
            <div class="header">
                <h2>Update & create the vacancies</h2>
            </div>
            <a href="./vacancies.php?show=vacancy"><button> Update Vacancies </button></a>

        </div>
        <div class="column transparent">
            <div class="header">
                <h2>View applicant details</h2>
            </div>
            <a href="./applicant.php?show=applicant"><button> Applicant details</button></a>

        </div>
    </div>
    <!-- <?php include('../footer.php')?> -->
</body>

</html>