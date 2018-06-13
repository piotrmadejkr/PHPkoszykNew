
    
    <div class="container">
        <?php 
        include ('header.php');
        include ('settings.php');
        
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
                echo '<td><a href="detale.php?szczegoly='.$k.'">'.$cokolwiek['nazwa'].'</a></td>';  
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
        if(isset($_GET['kup'])){
        echo'
        <div class="zakupy">
        <div class="container">
        <h3>Gratulujemy zakupu</h3>

        wybierz formę płatności
        <form method="post">
        <select name="platnosc" value="wybierz formę płatności">
        <option name="visa">Karta kredytowa</option>
        <option name="paypal">Paypal</option>
        <option name="przelew">Przelew na nasze knto</option>
        </select>
        <br>
        wybierz metodę odbioru
        <select method="post" name="dostawa">
        <option name="osobscie">osobiście</option>
        <option name="kurier">kurier</option>
        <option name="inPost">in Post</option>
        <option name="pobranie">za pobraniem</option>
        </select>
        <br>
        <input type="text" placeholder="Podaj ulicę" name="ulica">
        <input type="number" placeholder="numer mieszkania" name="mieszkanie">
        <input type="number" placeholder="kod pocztowy 00-000" name="kod">
        <input type="text" placeholder="miasto" name="miasto">
        <input type="email" placeholder="email" name="email">
        <input type="submit" name="wysylka" value="gotowe!">
        
        </form>
            
        </div>
        </div>';
         }
         else {
             echo ' 
             <a href="?kup=1">KUP!</a>';
         }
        
        ?>
<a href="index.php">wróc do sklepu</a>
         

    </div>

<!-- <form method="post" action="zakup.php"> -->
<!-- <input type="submit" name="kup" value="kupuję"> -->
<!-- </form> -->
<?php include ('footer.php'); ?>