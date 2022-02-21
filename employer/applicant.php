<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/employer.css">
    <title>Applicant details</title>
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
            <?php
            include('./db.php');
            while ($row = $result->fetch_assoc()) {
            ?>
                <div class="vacanccy">
                    <div class="section-header">
                        <h3 class="heading"><?php echo $row['name']; ?></h3>
                    </div>

                    <div class="section-body">
                        <table>
                            <tr>
                                <th>Name of the applicant</th>
                                <th>Minimum Qualification</th>
                                <th>Email address</th>
                            </tr>
                            <?php
                            $vid = $row['vacancyId'];
                            $sql2 = "select u.name, u.email, p.minqualification from user u, applies a, applicant p where p.username=u.username and u.username=a.username and vacancyId = $vid;";
                            $result2 = mysqli_query($conn, $sql2) or die($conn->error);
                            while ($row2 = $result2->fetch_assoc()) {
                            ?>
                                <tr class="row">
                                    <td><?php echo $row2['name']; ?></td>
                                    <td><?php echo $row2['minqualification']; ?></td>
                                    <td><a href="mailto:<?php echo $row2['email']; ?>"><?php echo $row2['email']; ?></a></td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php include('./footer.php')?>
</body>

</html>