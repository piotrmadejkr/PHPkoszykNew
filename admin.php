<?php 
include ('settings.php');


if($_GET['logowanie']=='wyloguj'){
    $_SESSION['zalogowany']= 0;
}

if($_SESSION['zalogowany'] != 1) {
header('location: zaloguj.php');
exit();
}


if(isset($_POST['save'])){
    $produkt[]=['nazwa'=>$_POST['name'], 'cena'=>$_POST['price'], 'status'=>0, 'opis'=>$_POST['opisProduktu'],'foto'=>$_POST['link'] ];
}
include ('header.php');

?>
<div class="container">
        <h1>lista produktów</h1>
        <?php
        echo '<table>';
        echo '<tr>';
        echo '<td>Nazwa</td>';  
        echo '<td>Cena</td>';  
     
        echo '<td>Usuń z Listy</td>'; 
        echo '</tr>';
        foreach($produkt as $k=>$cokolwiek) {
        echo '<tr>';
        echo '<td><a href="detale.php?szczegoly='.$k.'">'.$cokolwiek['nazwa'].'</a></td>';  
        echo '<td>'.$cokolwiek['cena'].'</td>';  
  
        echo '<td><a href="?usun='.$k.'">usuń z listy</a></td>'; 
        echo '</tr>';
        }
        echo '</table>';
        ?>
<form method="post" name="formDodawania">
    <input type="text" name="name" placeholder="Nowy produkt">
    <input type="number" name="price" placeholder="cena produktu(w gr)">
    <input type="text" name="link" placeholder="wklej link do zdjęcia">
    <textarea name="opisProduktu"></textarea>
    <input type="submit" name="save" value="wprowadź produkt!">
    



</form>
    </div>
    <div class="wyloguj">
    <a href="?logowanie=wyloguj">Wyloguj </a>
    </div>
<?php


echo '<pre>';
print_r($produkt);
echo'</pre>';

?>

<?php include ('footer.php'); ?>