<?php

//tableau des mois
$month = [
    1 => 'Janvier',
    2 => 'Février',
    3 => 'Mars',
    4 => 'Avril',
    5 => 'Mai',
    6 => 'Juin',
    7 => 'Juillet',
    8 => 'Aout',
    9 => 'Septembre',
    10 => 'Octobre',
    11 => 'Novembre',
    12 => 'Décembre'
];

//range des annees
$minYear = 2015;
$maxYear = 2025;

//si les mois et annees sont postés
if (isset($_POST['month']) && isset($_POST['year'])) {
    $monthSelected = ($_POST['month']);
    $yearSelected = ($_POST['year']);

    //le nombre de jours dans le mois selectionne
    $daysInMonth = date('t', mktime(0, 0, 0, $monthSelected, 1, $yearSelected));

    //le premier jour du mois
    $dayOne = date("N", mktime(0, 0, 0, $monthSelected, 1, $yearSelected));

    //compteur des jours
    $box = 0;

    //compteur du jour de depart du mois selectionne
    $e = 1;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/calendrier.css">
    <title>Calendrier</title>

</head>

<body>
    <?php if (!isset($_POST['submit'])) {
        require 'code.php'; ?>

    <?php } else {
        require 'code.php'; ?>

        <table>
            <caption><?= $month[$monthSelected] . ' ' . $yearSelected ?></caption>


            <tr class="row1">
                <th>Lundi</th>
                <th>Mardi</th>
                <th>Mercredi</th>
                <th>Jeudi</th>
                <th>Vendredi</th>
                <th>Samedi</th>
                <th>Dimanche</th>
            </tr>

            <?php
            for ($l = 1; $l <= 6; $l++) { //pour les semaines
                echo '<tr class="box">';

                for ($i = 1; $i <= 7; $i++) { //pour les jours
                    $box++; //on increment le compteur des jours qui remplissent toutes les cases du tableau
            ?>
                    <td><?php
                        //si le compteur des jours est superieur ou egal au premier jour du mois choisi et si le compteur du jour de depart est inferieur ou egal au nombre total de jours dans le mois selectionné
                        if ($box >= $dayOne && $e <= $daysInMonth) { ?>

                            <?= $e //on demarre le compteur de jour avec un nouveau compteur qui demarre a 1?>
                        <?php
                            $e++; //et on l'incremente
                        }; ?>
                    </td>
        <?php }
                echo '</tr>';
            }
        } ?>
        </table>
</body>

</html>