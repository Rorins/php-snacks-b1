<?php

    // Snack 1
    // Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
    // Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    // Stampiamo a schermo tutte le partite con questo schema.
    // Olimpia Milano - Cantù | 55-60

    $matches = [
        [
            'team1' => 'Acqua S.Bernardo Cantù',
            'team2' => 'Oriora Pistoia',
            'point_team_1' => 70,
            'point_team_2' => 45
        ],
        [
            'team1' => 'Fortitudo Pompea Bologna',
            'team2' => 'Dolomiti Energia Trentino',
            'point_team_1' => 82,
            'point_team_2' => 83
        ],
        [
            'team1' => 'Pallacanestro Trieste',
            'team2' => 'Virtus Roma',
            'point_team_1' => 72,
            'point_team_2' => 33
        ],
        [
            'team1' => 'Openjobmetis Varese',
            'team2' => 'Germani Basket Brescia',
            'point_team_1' => 101,
            'point_team_2' => 99
        ],
    ];
    

?>

<?php
$arrayLength = count($matches);
for ($i=0; $i<$arrayLength; $i++){
    echo $matches[$i][team1]." - ".$matches[$i][team2]." | ".$matches[$i][point_team_1]." - ".$matches[$i][point_team_2]."</br>";};
?> 

<?php
// Snack 2
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
// che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
// Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

if (strlen($name) > 3
&& strpos($mail, '.')
&& strpos($mail, '@')
&& is_numeric($age)){
    echo "accesso eseguito";
} else {
    echo "accesso negato";
};
?>

</br>

<!-- Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

//ARRAY KEYS RETURNS AN ARRAY OF KEYS OF ARRAY POSTS (IN THIS CASE THE KEYS ARE DATE)
//[FIRST DATE, SECOND DATE....]
$date = array_keys($posts);

//ENTERING ARRAY OF DATES IN FIRST LOOP TO PRINT THE DATES POSITION, (IT WILL LOOP FOR ELEMENTS INSIDE POSTS LENGTH)
for($i=0; $i < count($posts);$i++){
    echo $date[$i].'</br>';

//AFTER I ENTERED THE DATE POSITION I ENTER POSTS, DATE POSITION AND
// THE POSITION OF ELEMENTS INSIDE DATE POSITION (IT WILL LOOP FOR ELEMENTS INSIDE $DATE,INSIDE POSTS)
for($j=0; $j < count($posts[$date[$i]]); $j++){
   echo $posts[$date[$i]][$j]['title'].'</br>';
   echo $posts[$date[$i]][$j]['author'].'</br>';
   echo $posts[$date[$i]][$j]['text'].'</br>';
};
};
?>

