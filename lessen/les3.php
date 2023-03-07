<?php
include_once("header.php");
require_once("functions.php");
?>

<center>
    <?php
        function welkomsbericht(){
        $Bericht = "Today it is ";
        $day = date('l');

        echo "$Bericht $day";
        }

        welkomsbericht();
    ?>

    <br>
    <hr>
    <br>


    <form method="post">
        <label>Hoi voer hier je voor- en achternaam in.</label><br>
        First name: <input type="text" name="fname"><br>
        Last name: <input type="text" name="lname"><br>
        <input type="submit" name="submit" value="opslaan">
    </form>

    <?php
        if (isset($_POST['submit'])) {
          $fname = $_POST['fname'];
          $lname = $_POST['lname'];

          echo "Hey! ben jij toevallig $fname $lname";
        }
    ?>

    <br>
    <hr>
    <br>

    <?php
        $name = "Berke";

        function roep($name){
            return "Hey " . $name . ", hoe gaat het met je?";
        }

        echo roep($name);
    ?>

    <br>
    <hr>
    <br>

    <form method="post">
        <h1><strong>Test hier je e-mailadres.</strong></h1><br>
        Email: <input type="input" name="email"><br>
        <input type="submit" name="verzenden" value="opslaan">
    </form>

    <?php

        if (isset($_POST['verzenden'])) {
            $email = $_POST['email'];

            if (validate_email($email)){
                echo "<h4>Uw e-mailadres klopt</h4>";
            } elseif (empty($email)) {
                echo "<h4>- geen invoer -</h4>";
            } else {
                echo "<h4>Uw e-mailadres klopt niet</h4>";
            }
        }
    ?>

    <br>
    <hr>
    <br>

    <ul class="pagination center">
        <li class="page-item"><a class="page-link" href="les2.php">Previous</a></li>
        <li class="page-item"><a class="page-link" href="les2.php">Les 2</a></li>
        <li class="page-item"><a class="page-link" href="les3.php">Les 3</a></li>
        <li class="page-item"><a class="page-link" href="les4.php">Les 4</a></li>
        <li class="page-item"><a class="page-link" href="les4.php">Next</a></li>
    </ul>
</center>