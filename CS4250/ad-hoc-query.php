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





    $ad_hoc_query = $_POST['query'];


	try {

		$conn = new PDO("mysql:hodst=$server;dbname=$database", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $conn->prepare($ad_hoc_query);

        if (stripos($ad_hoc_query, "drop") !== false) {
            echo "Cannot DROP table! enter a non-malicious query please.";
        } else {
            $query->execute();
        }





        //Thanks to https://stackoverflow.com/questions/12413064/select-and-display-all-fields-from-mysql-table-for-indefinite-amount-of-columns
        //for the reference
        echo "<table class='container striped centered'>";

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
</body>



</html>
