<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, 
dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-Badwords</title>
</head>

<body>
    <?php
    $par = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam cumque numquam iure necessitatibus omnis. 
            Voluptates, eos assumenda non similique maxime mollitia vitae labore atque est recusandae adipisci quidem. Quod, blanditiis";
    ?>

    <p> <strong>Testo paragrafo:</strong><?php echo $par ?> </p>
    <p><strong>Lunghezza Paragrafo:</strong></p><?php echo strlen($par) ?> caratteri;

</body>

</html>