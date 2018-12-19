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


		$conn = new PDO("mysql:hodst=$server;dbname=$database", $username, $password);

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $conn->prepare("SELECT * FROM Team");
        $query->execute();

        echo "<table class='container striped centered'>";
        echo "<tr><th>National Team Id</th><th>Team Name</th><th>Phone Number</th><th>Busines Address</th></tr>";
        for ($i = 0; $row = $query->fetch(); $i++) {

            echo "<tr><td>" . $row['natteamid'] . "</td>";
            echo "<td>" . $row['teamname'] . "</td>";
            echo "<td>" . $row['phone_num'] . "</td>";
            echo "<td>" . $row['businessaddress'] . "</td></tr>";



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
