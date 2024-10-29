<?php
    include 'connection.php';

    $sql = "SELECT Periode, Experience, Detail from my_experience";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border=1>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["Periode"] . "</td>";
            echo "<td>" . $row["Experience"] . "</td>";
            echo "<td>" . $row["Detail"] . "</td>";
            echo "<tr>";
        }
        echo "</table>";
    }
    $conn->close();
?>