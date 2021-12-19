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

<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->

<?php $casualArray = []; 
    
    while(count($casualArray)<= 15){
    $number = rand(1,100);

    if(!in_array($number, $casualArray)){
        $casualArray[] = $number;
    };
    };

    print_r($casualArray);
?>

</br>
<!-- Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php
$paragraph = " Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus iaculis turpis vitae sapien dapibus, vel mollis lorem blandit. Nam sit amet imperdiet libero. Curabitur viverra vulputate est sed maximus. Aenean metus diam, bibendum sed feugiat vehicula, pharetra et dolor. Sed dapibus ex nec aliquet ullamcorper. Nam mattis fermentum fermentum. Suspendisse rhoncus nec elit a posuere. Integer dui metus, iaculis vel laoreet ut, congue ut tortor. Praesent vel sagittis quam. Donec non porta eros, sed cursus nisi. Duis et nunc nibh. Phasellus id arcu commodo, tristique mauris sed, dictum mi. Vivamus nec eleifend nunc, in scelerisque turpis. Vestibulum porta lorem in enim commodo ultricies.

Suspendisse ac commodo ligula. Donec sodales nisi a tortor dignissim, at hendrerit arcu tincidunt. Morbi posuere ex est, et vestibulum arcu molestie vel. Quisque mollis lorem quis condimentum pretium. Sed sed fringilla dui. Nam ac dignissim magna. Proin ultricies purus eget magna iaculis semper. Duis tempor feugiat malesuada. Mauris sed lobortis enim. Aenean dictum justo ut molestie iaculis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam at lacus ut nibh porttitor pharetra at a risus. Donec eu posuere diam. Nullam sollicitudin felis augue, non venenatis turpis aliquam nec. Nunc lectus sapien, scelerisque vitae nulla ut, tempus pretium risus. ";

//EXPLODE RETURNS AN ARRAY OF STRINGS, WE CANT PRINT THE POSITION OUT
$splitParagraph = explode(".", $paragraph);
echo $splitParagraph[0]."</br>";
echo $splitParagraph[1]."</br>";
echo $splitParagraph[2]."</br>";
?>

<!-- Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    ?>

<!--LOOP ON ELEMENTS INSIDE TEACHERS INSIDE DB-->
<div style="background: gray;width: 200px">
<?php
for($i=0; $i< count($db['teachers']); $i++){
echo $db['teachers'][$i]['name'];
echo $db['teachers'][$i]['lastname']."</br>";
}
?>
</div>

<!--LOOP ON ELEMENTS INSIDE PM INSIDE DB-->
<div style="background: green; width:200px">
<?php
for($i=0; $i< count($db['pm']); $i++){
echo $db['pm'][$i]['name'];
echo $db['pm'][$i]['lastname']."</br>";
}
?>
</div>



