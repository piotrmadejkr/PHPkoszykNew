<?php
session_start();

$produkt=array();
$produkt=$_SESSION['cokolwiek'];

if(count($_SESSION['cokolwiek']) == 0) {
$produkt[]=['cena'=>'10000','nazwa'=>'grabki', 'status'=>0];
$produkt[]=['cena'=>'15000','nazwa'=>'wiaderko', 'status'=>0]; //cena w groszach
$produkt[]=['cena'=>'14000','nazwa'=>'sitko', 'status'=>0];
$produkt[]=['cena'=>'17000','nazwa'=>'materac', 'status'=>0];
$produkt[]=['cena'=>'19000','nazwa'=>'piłka', 'status'=>0];
$produkt[]=['cena'=>'13000','nazwa'=>'kocyk', 'status'=>0];
}


function status($x,$k) {
    if($x>0) {
        return '<a href="?usunKoszyk='.$k.'">usuń z koszyka</a>';
    }
    else {
        return '<a href="?dodajKoszyk='.$k.'">dodoaj do koszyka</a>';
    }
}

if(isset($_GET['usun'])){
unset($produkt[$_GET['usun']]);
}

if(isset($_GET['usunKoszyk'])){
  $produkt[$_GET['usunKoszyk']]['status']=0;
}
if(isset($_GET['dodajKoszyk'])){
    $produkt[$_GET['dodajKoszyk']]['status']=1;
}




echo ' posiadasz $sumaProduktow sztuk produktow w koszyku na sumę: $suma groszy $ ';


$_SESSION['cokolwiek']=$produkt;


// if (isset[]){


// }





// echo '<pre>';
// echo print_r($produkt);
// echo '</pre>';


?>



