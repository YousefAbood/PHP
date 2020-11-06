<?php

$sk = 25;
$wb = 32;
$pd = 11;
$bm = 23;



echo '<style>
        table, tr, td{
            border: 2px solid black;
        }
        table {
            border-collapse: collapse;
        }
        
        td {
            padding: 10px;
        }
        
      </style>';

echo '<table>';

    echo '<tr>';

        echo '<td>';
            echo '<p>De Spartelkuikins</p>';
        echo '</td>';

        echo '<td>';
            echo $sk;
        echo '</td>';

        $numOfSwimmersSK = $sk / 5;
        round($numOfSwimmersSK, 0);
        for($a = 0; $a < $numOfSwimmersSK; $a++) {
            echo '<td>';
                echo '<img src="zwem.png" alt="" width="50px" height="50px">';
            echo '</td>';
        }

    echo '</tr>';

    echo '<tr>';

        echo '<td>';
            echo '<p>De Waterbuffels</p>';
        echo '</td>';

        echo '<td>';
            echo $wb;
        echo '</td>';

        $numOfSwimmersWB = $wb / 5;
        round($numOfSwimmersWB, 0);

        for($b = 1; $b < $numOfSwimmersWB; $b++) {
            echo '<td>';
                echo '<img src="zwem.png" alt="" width="50px" height="50px">';
            echo '</td>';
        }

    echo '</tr>';

    echo '<tr>';

        echo '<td>';
            echo '<p>Plonsmderin</p>';
        echo '</td>';

        echo '<td>';
            echo $pd;
        echo '</td>';

        $numOfSwimmersPD = $pd / 5;
        round($numOfSwimmersPD, 0);

        for($a = 1; $a < $numOfSwimmersPD; $a++) {
                echo '<td>';
                echo '<img src="zwem.png" alt="" width="50px" height="50px">';
                echo '</td>';
        }

    echo '</tr>';

    echo '<tr>';

        echo '<td>';
            echo '<p>Bommetje</p>';
        echo '</td>';

        echo '<td>';
            echo $bm;
        echo '</td>';

        $numOfSwimmersBM = $bm / 5;
        round($numOfSwimmersBM, 0);

        for($a = 1; $a < $numOfSwimmersBM; $a++) {
            echo '<td>';
                echo '<img src="zwem.png" alt="" width="50px" height="50px">';
            echo '</td>';
        }

    echo '</tr>';

echo '</table>';
