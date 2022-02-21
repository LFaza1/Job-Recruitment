<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacancy</title>
    <link rel="stylesheet" href="../css/employer2.css">
    <!-- <style>
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background-color: #efefef;
            border-radius: 1rem;
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 1rem;
            background-color: #bbb;
            box-shadow: 0 0 4px rgba(0, 0, 0, 0.6);
        }

        * {
            margin: 0;
            box-sizing: border-box;
            font-family: monospace;
        }

        body {
            background-image: url('background.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .section {
            display: flex;
            flex-direction: column;
            width: 80%;
            height: 90%;
            border-radius: 0.4rem;
            transition: all 0.5s ease-in;
            border: 0px;
            text-align: center;
            padding: 1rem;
            background-color: rgba(233, 233, 244, 0.3);
        }

        .section-header {
            display: flex;
            margin-bottom: 3rem;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            overflow-y: scroll;
            padding: 1rem;
            padding-top: 1.5rem;
        }

        .card {
            background: white;
            padding: 1rem;
            border-radius: 0.3rem;
            max-width: 70px;
            min-width: 20%;
            min-height: 300px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 0.3s ease-in;
        }

        .card:hover {
            transform: scale(1.07);
            box-shadow: 0 0 3px 0px #111;
            cursor: pointer;
        }

        .card-header {
            margin-bottom: 1.5rem;
        }

        .card-footer {
            display: flex;
            justify-content: flex-end;
        }


        .card-body {
            display: flex;
            text-align: left;
        }


        button {
            font-weight: bolder;
            margin: 0 0.5rem;
            border: 0;
            padding: 0.5rem;
            border-radius: 1rem;
            cursor: pointer;
            transition: all 0.5s ease-in;
            background-color: #111;
            color: #fff;
        }

        button:hover {
            background-color: #FFf;
            color: #111
        }

        h1 {
            color: #fff;
        }

        .blur {
            box-shadow: inset 0px 0px 2px #fefefed1;
            backdrop-filter: saturate(100%) blur(1px);
            background-color: rgba(255, 255, 255, 0.2);
        }
    </style> -->
    <link rel="stylesheet" href="../css/navbar.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="../logout.php">Log-Out</a></li>
                <li><a href="./home.php">Home</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <div class="section blur">
            <div class="section-header">
                <a href="./create_vacancy.php"><button>Create Vacancy</button></a>
            </div>
            <div class="cards">
                <?php
                include('./db.php');
                while ($row = $result->fetch_assoc()) {
                ?>
                    <div class="card">
                        <div class="card-section">
                            <div class="card-header">
                                <h3>Vacancy</h3>
                            </div>
                            <div class="card-body">
                                <p> Vacancy Name: <?php echo $row['name']; ?>
                                    <br /><br />
                                    Minimal Qualification: <?php echo $row['minqualification']; ?>
                                    <br /><br />
                                    Details: <?php echo $row['details']; ?>
                                </p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="?deleteV=<?php echo $row['vacancyId']; ?>">
                                <button>Delete</button>
                            </a>
                            <a href="./update_vacancy.php?showV=<?php echo $row['vacancyId']; ?>">
                                <button>Edit</button>
                            </a>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>

</body>

</html>