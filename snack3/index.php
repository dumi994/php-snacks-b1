<!-- Snack 3

-Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data.
-Stampare ogni data con i relativi post.
-Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z

 -->



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
$keys = array_keys($posts);
/* var_dump($keys); */


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Ciclo per la data -->
    <?php for ($i=0; $i < count($keys); $i++){
        $key = $keys[$i]; 
        ?>
        <h2><?php echo $key?></h2>
            
    <?php 
    /* ciclo per vedere cosa ce dentro la data */
        for($j=0; $j < count($key); $j++){
            $data = $posts[$key];
            /* var_dump($data[$j]); *

            /* Ciclo dentro ogni data*/
            for ($h=0; $h < count($data); $h++) { 
                $post = $data[$h] ?>
                <div class="card">
                    <p> <?php echo $post['title'] ?> </p>
                    <p> <?php echo $post['author'] ?> </p>
                    <p> <?php echo $post['text'] ?> </p>
                </div>

    <br><br><br>
    <?php
        }
    };
};
        
    ?>
    
</body>
</html>