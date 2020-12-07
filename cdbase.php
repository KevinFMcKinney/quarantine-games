<?php 

    $db = new mysqli("fall-2020.cs.utexas.edu","cs329e_bulko_fergus","Cradle6early9Lunacy","cs329e_bulko_fergus");

    if ($db->connect_errno) {
        die('Connect Error: ' . $db->connect_errno .
        ": " . $db->connect_error);
    }

    $command = "CREATE TABLE comments (user VARCHAR(32), comment TEXT);";
    $result1 = $db->query($command);

    $command2 = "INSERT INTO comments (user, comment) VALUES ('Kevin','Very great website!');";
    $result2 = $db->query($command2);

    // Show Table
    $command3 = "SELECT * FROM TABLE;";
    $table = $db->query($command3);
    
    echo "<table border=1>";
    foreach ($table as $row) {
        echo "<tr>";
        foreach ($row as $v){
            echo "<td>$v</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

?>