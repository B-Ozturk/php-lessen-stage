<?php include_once("header.php"); ?>
<center>
    <?php
        $leeftijd = 17;

        if ($leeftijd >= 18){
            echo "U mag de club betreden";
        } elseif ($leeftijd <= 18) {
            echo "Jij mag de club niet betreden";
        } else {
            echo "check je leeftijd eens";
        }
    ?>

<br>
<hr>
<br>

    <?php
    $userName = "naam";
    $password = "wachtwoord";

    if ($userName === "naam" && $password === "wachtwoord"){
        echo "Succesvol ingelogd!";
    } elseif ($userName != "naam" || $password != "wachtwoord"){
        echo "U heeft een van de gegevens verkeerd ingevoerd!";
    } else{
        echo "Er gaat iets fouts!";
    }
    ?>

<br>
<hr>
<br>

    <?php
        if(!(date('N') === 7)){
            echo "Het is geen zondag!";
        }
        ?>

        <br>
        <hr>
        <br>

        <?php

        $groet = (date('G') >= 12)? "goedemiddag":"goedemorgen";
        echo $groet;
    ?>

<br>
<hr>
<br>

    <?php
        $hour = date('G');

        if ($hour < 12){
            $greeting = "Goedemorgen!";
        } elseif ($hour >= 12){
            $greeting = "Goedemiddag!";
        }

        echo $greeting;
    ?>

<br>
<hr>
<br>

    <?php
        for ($i=0; $i < 10; $i++){
            echo "$i<br>";
        }
    ?>

<br>
<hr>
<br>

    <?php
        for ($a=0; $a <= 10; $a++){
            echo $a . " x 7 =" . $a*7 ."<br>";
        }
    ?>

<br>
<hr>
<br>

    <?php
        $klas = ["A", "B", "C"];

        for($b = 0; $b < count($klas); $b++){
            echo "Leerling: $klas[$b] <br>";
        }
    ?>

<br>
<hr>
<br>

    <?php
        $uur = date('G');
        switch ($uur){
            case($uur < 12):
                $comment = "Het is ochtend!";
            break;
            case($uur > 12 && $uur < 18):
                $comment = "Het is middag";
            break;
            case($uur >= 18):
                $comment = "Het is avond";
            break;
            default:
                $comment = "Check de code";
            break;
        }

        echo $comment;
    ?>

<br>
<hr>
<br>

    <?php
        $dag = date('N');

        switch ($dag){
            case(7):
                $status = "Vandaag zijn we gesloten";
                break;
            case(6):
                $status = "Vandaag zijn we open van 9:00 tot 17:00";
                break;
            default:
                $status = "Vandaag zijn we open van 8:00 tot 22:00";
                break;
        }

        echo $status;
    ?>

<br>
<hr>
<br>

    <ul class="pagination center">
        <li class="page-item disabled"><a class="page-link" href="les2.php">Previous</a></li>
        <li class="page-item"><a class="page-link" href="les2.php">Les 2</a></li>
        <li class="page-item"><a class="page-link" href="les3.php">Les 3</a></li>
        <li class="page-item"><a class="page-link" href="les4.php">Les 4</a></li>
        <li class="page-item"><a class="page-link" href="les3.php">Next</a></li>
    </ul>

</center>