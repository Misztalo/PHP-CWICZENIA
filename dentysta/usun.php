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
<form action="usun.php" method="POST">
	Imię<br><input type="text" name="imie">
    <br>
    <br>
    Nazwisko
    <br>
    <input type="text" name="nazwisko">
    <br>
    <br>
						<input type="reset" value="czyść">
					<input type="submit" value="usuń" name="usun">
					</form>	
	<?php 
	
	$kontakt = new mysqli('localhost', 'root', '', 'dentysta');
	if ($kontakt->connect_error) {
		die("Błaąd połączenia:" . $kontakt->connect_error);
    }else if (isset($_POST['usun'])) {
		$imie_p = $_POST['imie'];
        $nazwisko_p = $_POST['nazwisko'];
		$sql = "DELETE FROM `pacjenci` WHERE imie='$imie_p'and nazwisko='$nazwisko_p'";
		// tutaj poprawione
		if ($kontakt->query($sql) === TRUE) {
			echo "Record pomyślnie usunięty";
		} else {
			echo " Błąd podczas usuwania: " . $kontakt->error;
		}
	}
	$kontakt->close();
    
	?>
</div>
</body>
</html>