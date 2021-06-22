<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e 
che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 -->
<?php 
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];
var_dump($mail);

$re = '/[A-z]@[A-z].[A-z]/m';
$str = 'mail@mail.it';

/* preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0); */



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
    
        <p>Nome: <?php echo $name ?> </p>
        <p>Età: <?php echo $age ?> </p>
        <p>Email: <?php echo $mail ?> </p>
    <?php 
        if(strlen($_GET['name']) > 3 && is_numeric($_GET['age']) && strpos($_GET['mail'], "@") && strpos($_GET['mail'], ".")){
            echo "Accesso Consentito";
        }else{
            echo "Accesso Negato";
        }
    ?>

</body>
</html>