<?php
include_once("header.php");
require_once("functions.php");
?>

<html>
<link rel="stylesheet" href="les4.css">
<script src="les4.js"></script>
</html>

<center>
    <?php
    $servername = "localhost";
    $username = "berke";
    $password = "berke";
    $dbname = "berke_phplessen";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn, $sql);

    $i = 0;

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        echo"<table>";
        while($row = mysqli_fetch_assoc($result)) {
            $i++;
            echo "<tr>";
            echo "<td>ID: " . $row["id"]. " - Name: " . $row["name"]. " " . " - Email: " . $row["email"]. " - Reservations: " . $row["reservations"] . "<br> - Adres: " . $row["adres"] . "- Role: " . $row["role"]."</td>";
            echo "</tr>";
            echo "<br>";
        }
        echo"</table>";
        echo "<h5><strong>" . $i . " results</strong></h5>";
    } else {
        echo "<h5><strong>" . $i . " results</strong></h5>";
    }

    mysqli_close($conn);
    ?>





<br>
<hr>
<br>

    <ul class="pagination center">
        <li class="page-item"><a class="page-link" href="les3.php">Previous</a></li>
        <li class="page-item"><a class="page-link" href="les2.php">Les 2</a></li>
        <li class="page-item"><a class="page-link" href="les3.php">Les 3</a></li>
        <li class="page-item"><a class="page-link" href="les4.php">Les 4</a></li>
        <li class="page-item"><a class="page-link" href="../guestbook/index.php">Next</a></li>
    </ul>

</center>
<script src="les4.js"></script>