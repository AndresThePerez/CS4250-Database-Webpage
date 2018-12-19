<?php

$username = "aperez";
$password = "wcz96PPF";
$database = "aperez";
$server = "hopper.csustan.edu";





    $ad_hoc_query = $_POST['query'];


	try {


		$conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $conn->prepare($ad_hoc_query);
        $query->execute();
      

        //Thanks to https://stackoverflow.com/questions/12413064/select-and-display-all-fields-from-mysql-table-for-indefinite-amount-of-columns
        //for the reference
        echo "<table class='container'>";

            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";

                foreach($row as $value) {
                    echo "<td>" . $value . "</td>";
                }

                echo "</tr>";

            }


                    echo "</table>";

    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        }
    
    








?>