<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Applicant_Status</title>
  <link rel="stylesheet" href="../css/applicant.css">
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
  <h1>You Have Applied</h1>

  <div class="flex-container">
    <?php
    include('./db.php');
    while ($row = $result->fetch_assoc()) {
    ?>
      <div>
        <div class="row">
          <div class="column1">
            <h3><?php echo $row['name']; ?></h3>
          </div>
          <div class="column2">
            <table>
              <tr>
                <td><img src="../images/applicant1.png" width="35px" height="35px"></td>
                <td>
                  <p><?php echo $row['companyname']; ?></p>
                </td>
                <td>
                  <p><?php echo $row['telephone']; ?></p>
                </td>
                <td>
                <p><a target="_blank" href="<?php echo $row['website']; ?>">Visit Website</a></p>
                </td>
              </tr>
            </table>
          </div>
          <div class="column3">
            <div class="button">
            <a href="?tickoff=<?php echo $row['vacancyId'] ?>"><span></span>Undo Application</a>
          </div>
          </div>
        </div>
      </div>
    <?php } ?>


  </div>
</body>

</html>