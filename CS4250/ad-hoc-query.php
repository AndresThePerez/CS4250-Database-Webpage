<?php

$username = "aperez";
$password = "wcz96PPF";
$database = "aperez";
$server = "hopper.csustan.edu";





    $ad_hoc_query = $_POST['query'];


	try {


		$conn = new PDO("mysql:hodst=$server;dbname=$database", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $conn->prepare($ad_hoc_query);
        $query->execute();

        echo "<table class='container'>";
        for ($i = 0; $row = $query->fetch(); $i++) {

            echo "<tr><td>" . $row[key($row)] . "</td>";
            echo "<td>" . $row[key($row)] . "</td></tr>";



        }

        echo "</table>";

    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        }
    
    








?>