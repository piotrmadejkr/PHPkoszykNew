<?php
include ('settings.php');
include ('header.php');

if(isset($_POST['zaloguj'])) {
    if(($_POST['login']=='admin') AND ($_POST['password']=='admin')) {
        $_SESSION['zalogowany'] = 1;
        header('location: admin.php');
    }
    else {
       echo 'podaj poprawne hasło lub login';
    }
}



?>
<div class="container">
<form method="post" name="zaloguj"> 
<h3>Zaloguj jako Administrator</h3>
<input type="text" name="login" placeholder="podaj login">
<input type="password" name="password" placeholder="podaj haslo">
<input type="submit" name="zaloguj" value="Zaloguj">
</form>

<a href="index.php">przejdź do sklepu</a>
</div>
<?php
?>
<?php include ('footer.php'); ?>