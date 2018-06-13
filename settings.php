<?php
session_start();


$produkt=array();
$produkt=$_SESSION['cokolwiek'];

if(count($_SESSION['cokolwiek']) == 0) {
$produkt[]=['cena'=>'10000','nazwa'=>'grabki', 'status'=>0,'opis'=>'Grabki z plastiku najwyższej jakości, sprawdzą się na każdej plaży.', 'foto'=>'https://images.pexels.com/photos/296357/pexels-photo-296357.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260'];
$produkt[]=['cena'=>'15000','nazwa'=>'wiaderko', 'status'=>0,'opis'=>'"Póki dzban wodę nosi, puty się ucho nie urwie"?- w tym wiaderku taka sytuacja Wam nie grozi-jednym zdaniem moc plus bezpieczeństwo!', 'foto'=>'https://images.pexels.com/photos/909493/pexels-photo-909493.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260']; //cena w groszach
$produkt[]=['cena'=>'14000','nazwa'=>'sitko', 'status'=>0,'opis'=>'Idealny prezent dla plażowego poszukiwacza skarbów.', 'foto'=>'https://cdn.pixabay.com/photo/2015/05/11/14/38/sandpit-762541_960_720.jpg'];
$produkt[]=['cena'=>'17000','nazwa'=>'materac', 'status'=>0,'opis'=>'Słońce i woda to jego żywioł, przenośny komfort, w przystępnej cenie, dla każdego, już dziś.', 'foto'=>'https://cdn.pixabay.com/photo/2015/04/02/22/41/air-mattress-704445_960_720.jpg'];
$produkt[]=['cena'=>'19000','nazwa'=>'piłka', 'status'=>0,'opis'=>'Gry zespołowe łączą ludzi i zapewniają wspaniałą rozrywkę - również dla całej rodziny', 'foto'=>'https://images.pexels.com/photos/207227/pexels-photo-207227.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260'];
$produkt[]=['cena'=>'13000','nazwa'=>'kocyk', 'status'=>0,'opis'=>'Jaki jest koń każdy widzi... O tym kocyku nie powiedział jeszcze nikt! Sprawdź nasze wzory!', 'foto'=>'https://images.pexels.com/photos/827056/pexels-photo-827056.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260'];
}



if(isset($_POST['wysylka'])){
    
    $link = 'http://localhost/phpkoszykNew/zakup.php?platnosc='.$_POST['platnosc'].'&dostawa='.$_POST['dostawa'].'&ulica='.$_POST['ulica'].'&mieszkanie='.$_POST['mieszkanie'].'&kod='.$_POST['kod'].'&miasto='.$_POST['miasto'];
    
    
    $ok = mail($_POST['email'],'nowe zamowienie',$link);
    if($ok)
    {
        echo 'wyslano';
    }
    else
    {
        echo '----------------------------';
        echo $link;
        echo '----------------------------';
    }
  
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



// echo ' posiadasz $sumaProduktow sztuk produktow w koszyku na sumę: $suma groszy $ ';


$_SESSION['cokolwiek']=$produkt;


// if (isset[]){


// }





// echo '<pre>';
// echo print_r($produkt);
// echo '</pre>';


?>



