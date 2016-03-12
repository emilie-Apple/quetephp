<?php
//$students = [
    //"Emmanuel"  => 42,
    //"Thierry"   => 51,
    //"Pascal"    => 45,
    //"Eric"      => 48,
    //"Nicolas"   => 19
//];

    include './header.php';

    $students = [
        ['Prenom' => 'Emmanuel',
            'Age' => 42
        ],
        ['Prenom' => 'Thierry',
            'Age' => 51
        ],
        ['Prenom' => 'Pascal',
            'Age' => 45
        ],
        ['Prenom' => 'Eric',
            'Age' => 48
        ],
        ['Prenom' => 'Nicolas',
            'Age' => 19
        ],
    ];
    if(is_array($students)) {
        echo '<table>';
        echo '<tr>';
        echo '<th>Prenom</th>';
        echo '<th>Age</th>';
        echo '</tr>';

        foreach ($students as $value) { /* Pour chaque valeur contenue dans le tableau, faire... */
            echo '<tr>';
            echo '<td>"' . $value["Prenom"] . '"</td>';
            echo '<td>"' . $value["Age"] . '"</td>';
            echo '</tr>';
        }

        $somme_ages = array_sum(array_column($students, 'Age'));
        $moyenne = $somme_ages / 5;
        echo '</table><br>';
        echo "La moyenne des âges est de $moyenne .";
    }

?>











