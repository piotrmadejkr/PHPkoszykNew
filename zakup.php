<!-- // wysle tu maila za cos sie kupiło  -->
<?php
include ('settings.php');
include ('header.php');
?>
<div class="podsumowanie zakupów">
    <div class="container">
    <h3>Gratulujemy zakupu</h3>
    <?php
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
      echo 'Adres:'.$_GET['ulica'].$_GET['mieszkanie'].$_GET['kod'].$_GET['miasto'];
      echo $_GET['wysylka'];
      echo $_GET['platnosc'];

    ?>
    

    </div>
</div>

<?php
?>
<?php include ('footer.php'); ?>