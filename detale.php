<?php include('settings.php'); ?>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>szatnia</title>  
</head>
<body> 
    <div class="container">
      
        <h2><?php echo $produkt[$_GET['szczegoly']]['nazwa']?></h2>
        <img src="<?php echo $produkt[$_GET['szczegoly']]['foto']?>">
        <h3>cena:<?php echo $produkt[$_GET['szczegoly']]['cena']?></h3>
        <p><?php echo $produkt[$_GET['szczegoly']]['opis']?></p>
        <a href="./">powrót do głównego menu</a>
        <?php
        // echo $produkt[$_GET['szczegoly']]['status'];
        // echo '<pre>';
        // echo print_r($produkt);
        // echo '</pre>';
        ?>
    </div>
</body>
</html>