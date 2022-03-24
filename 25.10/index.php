<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    
    <title>Java Script - ćwiczenia</title>

    <link rel="stylesheet" href="index.css"/>

    
</head>
<body>
    <center>
<h1>Rejestracja klienta</h1>
<form action="index.php" method="POST">
Nazwisko: </br>
<input type="text" name="nazw" value="" size="30"></br>
Imię:</br>
<input type="text" name="im" value="" size="30"></br>
Kod pocztowy:</br>
<input type="text" name="kod" value="" size="30"></br>
Miejscowość:</br>
<input type="text" name="mia" value="" size="30"></br>
Ulica: </br>
<input type="text" name="ul" value="" size="30"></br>
Numer domu:</br>
<input type="text" name="nr" value="" size="30"></br>
Pesel: </br>
<input type="text" name="pe" value="" size="30"></br>
Numer telefonu:</br>
<input type="text" name="tel" value="" size="30"></br>
adres e-mail:</br>
<input type="text" name="adr" value="" size="30"></br>

 


<p>
<input type="submit" value="dodaj" name="dodaj">
<input type="reset"  value="reset" name="reset">
<input type="submit" value="usun" name="usun">

 

</p>

 

 

 

</form>
<?php
$baza = mysqli_connect('localhost','root','','wiai27.10');
 if (mysqli_connect_errno())                               
        {
        exit("BŁĄD POŁACZENIA".mysqli_connect_error());           
        }
        else
        {
        echo "POŁĄCZONO"."</br></br>"; 
        }

$nazwisko = $_POST['nazw'];
$imie = $_POST['im'];
$kod = $_POST['kod'];
$miasto = $_POST ['mia'];
$ulica = $_POST['ul'];
$nr = $_POST['nr'];
$pesel = $_POST['pe'];
$tel = $_POST['tel'];
$mail = $_POST['adr'];

 

$dodaj = "INSERT INTO informacje VALUES ('$nazwisko','$imie','$kod','$miasto','$ulica','$nr','$pesel','$tel','$mail')";
$usun = "DELETE FROM informacje WHERE nazwisko = $nazwisko , imie = $imie";
$sql =mysqli_query($baza,$dodaj);


if (!$sql===true)
{
echo "coś poszło nie tak";

 

}
else
{
echo "rekord dodany";

 

}
mysqli_close($baza);

 

?>

 

 
</center>
</body>
</html>