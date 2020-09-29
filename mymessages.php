<?php
include "db_connect.php";
// To View From DB
?>
<?php
$stmt = $con->prepare("SELECT name, email, message FROM messages");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/ASA.css" />
</head>

<body>
    <div class="container">
        <div class="all">
            <?php
            foreach ($result as $key) {
                echo "<div class='row contain'>";
                echo "<div class='col-sm-12 col-xs-12'>";
                foreach ($key as $k => $val) {
                    echo "<p> $k :" . $val . " : </p>";
                }
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
        <ul>
            <li><a href="index.php">My Portfolio</a></li>
        </ul>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ASA.js"></script>
</body>

</html>