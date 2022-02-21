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
    <?php include('./footer.php')?>
</body>

</html>