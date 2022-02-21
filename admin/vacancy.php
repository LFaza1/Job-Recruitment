<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacancy Management</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" /> -->
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
                <h4 class="title">Vacancy Management</h4>
            </div>
            <div class="section-body">
                <table>
                    <tr>
                        <th>Employer Name</th>
                        <th>Name</th>
                        <th>Details</th>
                        <th>Minimal Requirements</th>
                    </tr>
                    <?php
                        include('./db.php');
                        while($row = $result->fetch_assoc()){
                    ?>
                    <tr class="row">
                        <td><?php echo $row['uname'];?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['details'];?></td>
                        <td><?php echo $row['minqualification'];?></td>
                        <td>
                            <a href="?deleteV=<?php echo $row['vacancyId'];?>"><button class="btn-delete">
                                <i class="fas fa-trash"></i>
                                Delete</button></a>
                            
                        </td>
                    </tr>
                    <?php }?>
                </table>
            </div>
        </div>

</body>

</html>