<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicant Management</title>
    <link rel="stylesheet" href="../css/admin.css">
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
                <h4 class="title">Applicant Management</h4>
            </div>
            <div class="section-body">
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Telephone Number</th>
                    </tr>
                    <?php
                        include('./db.php');
                        while($row = $result->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['telephone'];?></td>
                        <td>
                        <a href="?deleteA=<?php echo $row['username'];?>"><button class="btn-delete">
                                Delete</button></a>
                        </td>
                    </tr>
                    <?php }?>
                    
                </table>
            </div>
        </div>

</body>

</html>