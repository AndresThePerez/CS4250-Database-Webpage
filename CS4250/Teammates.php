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

        $query = $conn->prepare("SELECT * FROM Teammates");
        $query->execute();

        echo "<table class='container striped centered'>";
        echo "<tr><th>National Id Number</th><th>Wikipedia</th><th>Personal Email</th><th>Firstname</th><th>Lastname</th><th>Salary</th><th>Address</th><th>Phone Number</th><th>National Team Id</th></tr>";
        for ($i = 0; $row = $query->fetch(); $i++) {

            echo "<tr><td>" . $row['natidnum'] . "</td>";
            echo "<td>" . $row['wikipage'] . "</td>";
            echo "<td>" . $row['personal_email'] . "</td>";
            echo "<td>" . $row['firstname'] . "</td>";
            echo "<td>" . $row['lastname'] . "</td>";
            echo "<td>" . $row['salary'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['phone_number'] . "</td>";
            echo "<td>" . $row['natteamid'] . "</td></tr>";



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
