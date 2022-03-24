<!DOCTYPE HTML>
<html>
<head>
    <title>DENTYSTA</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="styl.css"/>
<head>
<body>
<div id="gora">
<h1>WITAMY MAMY NADZIEJĘ ŻE ZNAJDZIESZ TO CZEGO SZUKASZ</h1>
</div>
<div class="menu">
<ul>
<li><a href="index.php">POWRÓT NA GŁÓWNĄ</a></li>
</ul>
</div>
<div id="glownydiv">
    <div id="wpis">
    <form action="zapis.php" method="POST">
        <label>imię<br><input type="text" name="imie"></label>
        <br><br>
	    <label>nazwisko<br>
        <input type="text" name="nazwisko"></label>
        <br><br>
	    <label>rodzaj wizyty<br>
            <input type="text" name="rodzaj_wizyty"></label>
        <br>
        <br>
        <label>data<br>
            <input type="date" name="dzien"></label>
        <br>
        <br>
        <label>godzina<br>
            <input type="time" name="godzina"></label>
	    <br><br><br>
	    <input type="submit" value="dodaj" name="dodaj">
    </form>

        <?php 
	
	skrypt1();
	?>
    </div>
</div>
</body>
</html>









<?php 
function skrypt1()
{
$kontakt = mysqli_connect('localhost', 'root','','dentysta' );
if (isset($_POST['dodaj'])){
if ($kontakt){
echo "masz połączenie<br>";
}else{
echo "baza jest nieosiągalna";
}
$imie=$_POST['imie'];
$nazwisko=$_POST['nazwisko'];
$rodzaj_wizyty=$_POST['rodzaj_wizyty'];
$dzien=$_POST['dzien'];
$godzina=$_POST['godzina'];
$sql = "INSERT INTO pacjenci ( imie, nazwisko, rodzaj_wizyty, dzien, godzina) VALUES ( '".$imie."', '".$nazwisko."', '".$rodzaj_wizyty."','".$dzien."','".$godzina."')";
$zapis = mysqli_query($kontakt, $sql);
if($zapis){
	echo "Pacjent " .$imie."  ".$nazwisko."  został zapisany  ";
	
}

}

}


?>