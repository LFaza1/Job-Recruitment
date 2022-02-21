<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/navbar.css">
    <title>Home</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background: url("./images/home.jpg");
            background-color: #ffffff;
            background-attachment: fixed;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            font-family: Helvetica, sans-serif;
        }

        mark {
            padding: 10px;
            color: #ffc412;
            ;
            background-color: #4E598C;
            border-radius: 10px;
        }

        .welcome {
            color: rgb(99, 99, 99);
            text-align: center;
            margin: 70px;
        }
        .welcome h1{
            margin: 0;
        }

        .description {
            margin: 40px;
            padding: 20px;
            background-color: rgba(240, 243, 255, 0.694);
        }

        .description h2 {
            color: rgb(121, 121, 121);
            text-align: center;
        }

        .description h3 {
            color: rgb(238, 121, 121);
            text-shadow: 2px 2px 9px #CE6E6E;
            
        }

        .description ul {
            list-style: none;
            padding: 10px;
        }

        .description li {
            border-radius: 5px;
            padding: 10px;
            color: grey;
            margin: 5px;
        }
        .description li:nth-child(even) {
            background-color: #5e6cab61;
        }

        .description li:nth-child(odd) {
            background-color: #ffc41271;
        }

        .navigation {
            background-color: rgba(219, 222, 253, 0.694);
            margin: 20px;
            padding: 20px;
        }

        .navigation h2 {
            display: inline;
            color: #4e6a8c;
        }

        .navigation button {
            background-color: rgba(252, 175, 88, 0.714);
            font-weight: bold;
            border-width: 0px;
            width: 123px;
            height: 40px;
            border-radius: 10px;
            margin: 10px 50px;
            cursor: pointer;
        }
        .navigation a{
            text-decoration: none;
            color: #4E598C;
        }
    </style>
</head>

<body>
    <?php include("./header.php") ?>
    <div class="welcome">
        <h1>Welcome to <mark>Vacan Z</mark></h1>
    </div>
    <div class="description">
        <h2>What you can do..</h2>
        <h3>If you are an applicant</h3>
        <ul>
            <li>View vacancies from different employers.</li>
            <li>Pick your preferred vacancy and apply.</li>
            <li>View your pending applications</li>
        </ul>
        <h3>If you are an employer</h3>
        <ul>
            <li>Create vacancies to hire employees into your organization</li>
            <li>Update information in the vacancies you've created</li>
            <li>Delete vacancies</li>
            <li>View the inforamtion about the applicants who have applied for your vacancies</li>
        </ul>
    </div>
    <div class="navigation">
        <h2>Want to know more about us?</h2>
        <a href="./aboutus.php"><button>About Us</button></a>
    </div>
    <div class="navigation">
        <h2>Get to know more about the website</h2>
        <a href="./faq.php"><button>FAQ</button></a>
    </div>
    <?php include('./footer.php')?>
</body>

</html>