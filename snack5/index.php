<!-- Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
 -->
<?php

$paragrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae magni eius consequatur temporibus a eligendi! Dolores nihil maxime quaerat molestias deleniti iusto. Harum corrupti enim neque fugit inventore adipisci doloribus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae magni eius consequatur temporibus a eligendi! Dolores nihil maxime quaerat molestias deleniti iusto. Harum corrupti enim neque fugit inventore adipisci doloribus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae magni eius consequatur temporibus a eligendi! Dolores nihil maxime quaerat molestias deleniti iusto. Harum corrupti enim neque fugit inventore adipisci doloribus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae magni eius consequatur temporibus a eligendi! Dolores nihil maxime quaerat molestias deleniti iusto. Harum corrupti enim neque fugit inventore adipisci doloribus.";
/* var_dump($paragrafo) */
$paragrafi = explode(".", $paragrafo);
$array = [];
$array[] = $paragrafi;
var_dump($array);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragrafi</title>
</head>
<body>
     <p><?php echo $paragrafo?></p>
     

</body>
</html>