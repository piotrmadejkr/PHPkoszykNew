<?php include ('settings.php') ?>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
    <title>szatnia</title>  
</head>
<body>

<?php
echo '<table>';
echo '<tr>';
echo '<td>Nazwa</td>';  
echo '<td>Cena</td>';  
echo '<td>Status</td>'; 
echo '<td>Usuń z Listy</td>'; 
echo '</tr>';



foreach($produkt as $k=>$cokolwiek) {

echo '<tr>';
echo '<td>'.$cokolwiek['nazwa'].'</td>';  
echo '<td>'.$cokolwiek['cena'].'</td>';  
echo '<td>'.status($cokolwiek['status'],$k).'</td>'; 
echo '<td><a href="?usun='.$k.'">usuń z listy</a></td>'; 
echo '</tr>';
}
echo '</table>';
echo '<a href="koszyk.php">przejdz do koszyka</a>';
?>






<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.waterwheelCarousel.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>

