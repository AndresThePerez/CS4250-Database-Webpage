<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link rel="stylesheet" type="text/css" href="styles.css">
<title>
</title>

</head>


<?php
$username = "aperez";
$password = "wcz96PPF";
$database = "aperez";
$server = "hopper.csustan.edu";
    try {
        $conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $conn->prepare("SELECT * FROM Game");
        $query->execute();
         echo "<table class='container striped centered'>";
         echo "<tr><th>Nat. Game ID</th><th>Date</th><th>State</th><th>City</th><th>Winning Team Name</th><th>Losing Team Name</th><th>Win Score</th><th>Lose Score</th><th>Penalties</th><th>Assists</th><th>Stadium</th><th>Nat. Tean ID</th><th>Nat, League ID</th></tr>";

         
        for ($i = 0; $row = $query->fetch(); $i++) {
            echo "<tr><td>" . $row['natgameid'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['state'] . "</td>";
            echo "<td>" . $row['city'] . "</td>";
            echo "<td>" . $row['winningtname'] . "</td>";
            echo "<td>" . $row['losingtname'] . "</td>";
            echo "<td>" . $row['winscore'] . "</td>";
            echo "<td>" . $row['losescore'] . "</td>";
            echo "<td>" . $row['penalties'] . "</td>";
            echo "<td>" . $row['assists'] . "</td>";
            echo "<td>" . $row['stadium'] . "</td>";
            echo "<td>" . $row['natteamid'] . "</td>";
            echo "<td>" . $row['natleagueid'] . "</td></tr>";
        }
        echo "</table>";
    }
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    }
    $conn->null;
?>



</body>



</html>