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
					<fieldset>
					<legend><h2> Szukaj</h2></legend>
					<form action="znajdz.php" method="GET">
					<label>imię
					<select name="imie">
	
				<?php 
					skrypt3(); 
				?>
	
					</select>

			<input type="submit" value="szukaj">
	</form></fieldset>
    <br>
    <fieldset>
				<legend><h2>Dane wyświetlane z bazy</legend></h2>
	<?php
		skrypt1();
	?>
	</fieldset>
</body>
</html>

<?php 
function skrypt3()
{
$kontakt = mysqli_connect('localhost', 'root','','dentysta' );

$wynik = mysqli_query($kontakt,"SELECT imie FROM pacjenci");

while($wiersz=$wynik->fetch_assoc())
	{
		$imie=$wiersz['imie'];
		
		echo " <option value='$imie'>$imie</option> ";
		
	}

}


?>

<?php
function skrypt1()
{
 if(isset($_GET["imie"]) && $_GET["imie"] !="")                  /*jeżeli zmienna $_GET jest prawda to wypisz (print_r($_GET)) && - i jeżeli zmienna $_GET jest !* -różna od 0-miejsca pustego to też pisz print_r..   */
{
                                                              /*print_r($_GET["imie"]);}/*  print_r na potrzeby sprawdzania wyświetlania zmiennej $_GET*/
$kontakt = mysqli_connect("localhost","root", "", "dentysta");
if(!$kontakt){
echo "Problemy z łączem poza granicami kraju"  ;                /*w nawiasie zapis !$kontakt - zaprzeczenie (jeżeli nie można połączyć,znaleźć) $kontakt- prawda jeżeli nastąpiło połączenie  */
}
$imie=$_GET["imie"];
$sql = "SELECT `imie`,`nazwisko`,`rodzaj wizyty`, `dzien` , `godzina` FROM `pacjenci` WHERE `imie`='$imie'";
$odp=mysqli_query($kontakt,$sql);

while ($tab=mysqli_fetch_assoc($odp)){
$imie=$tab['imie'];
$nazwisko=$tab['nazwisko'];
$rodzaj_wizyty=$tab['rodzaj wizyty'];
$dzien=$tab['dzien'];
$godzina=$tab['godzina'];
echo "Pacjent: ".$imie." " .$nazwisko."  ".$rodzaj_wizyty." dnia: ".$dzien." ".$godzina."";}
}
else{
echo "podaj dane";
}
}

?>