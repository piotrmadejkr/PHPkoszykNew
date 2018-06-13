

<?php 
include ('settings.php');

echo '<a href="index.php">wróc do sklepu</a>';


echo '<table>';
echo '<tr>';
echo '<td>Nazwa</td>';  
echo '<td>Cena</td>';  
echo '<td>Status</td>'; 
echo '</tr>';



$sumaProduktow=0;
foreach($produkt as $k=>$cokolwiek)
{
    if ($cokolwiek['status'] == 1) 
    {
        echo '<tr>';
        echo '<td>'.$cokolwiek['nazwa'].'</td>';  
        echo '<td>'.$cokolwiek['cena'].'</td>';  
        echo '<td>'.status($cokolwiek['status'],$k).'</td>'; 
        echo '</tr>';
        $suma = $suma+$cokolwiek['cena']; //$suma jest niezadeklarowana tylko tworzy sie w locie przy petli
        $sumaProduktow++;
    }
}
echo '<tr>';
echo '<td>ilość produktów:'.$sumaProduktow.'</td>';  
echo '<td>SUMA:'.$suma.'</td>';  
echo '<td></td>'; 
echo '</tr>';

echo '</table>';


 



?>