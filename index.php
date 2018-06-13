<?php include ('settings.php') ?>
<?php include ('header.php')?>

<a href="zaloguj.php">Zaloguj jako Administrator</a>
    <div class="container">
        <h1>Witaj w naszym sklepie!</h1>
        <?php
        echo '<table>';
        echo '<tr>';
        echo '<td>Nazwa</td>';  
        echo '<td>Cena</td>';  
        echo '<td>Status</td>';  
        echo '</tr>';
        foreach($produkt as $k=>$cokolwiek) {
        echo '<tr>';
        echo '<td><a href="detale.php?szczegoly='.$k.'">'.$cokolwiek['nazwa'].'</a></td>';  
        echo '<td>'.$cokolwiek['cena'].'</td>';  
        echo '<td>'.status($cokolwiek['status'],$k).'</td>'; 
        echo '</tr>';
        }
        echo '</table>';

        ?>
        <a href="koszyk.php">przejdz do koszyka</a>
        <?php include ('footer.php'); ?>



