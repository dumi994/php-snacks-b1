<!-- 
    Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite,
 punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
 -->



<?php 
$partite=[
    [
        "sq_casa" => "Grosseto",
        "sq_ospite" => "Follonica",
        "esito" => "98 - 74"
    ],    
    [
        "sq_casa" => "Roma",
        "sq_ospite" => "Lazio",
        "esito" => "102 - 90"
    ],    
    [
        "sq_casa" => "Napoli",
        "sq_ospite" => "Bari",
        "esito" => "81 - 85"
    ],    
 
];
for($i = 0; $i < count($partite); $i++ ){
    /* var_dump($partite[$i]); */
    $partita = $partite[$i];
    ?>
    <p><?php echo $partita["sq_casa"] ?> <?php echo $partita["sq_ospite"] ?> || <?php echo $partita["esito"] ?></p>
    <?php
};



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Squadre di basket</title>
</head>
<body>
    <!--  -->
</body>
</html>