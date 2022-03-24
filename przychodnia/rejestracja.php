<!DOCTYPE HTML>
<html>
<head>
<title>Przychodnia</title>
<meta charset="UTF-8"/>
<link rel="stylesheet" href="przychodnia.css"/>
</head>
<body>
<div class="baner">
<h1>PRAKTYKA LEKARZA RODZINNEGO</h1>
<nav class="menu">
<ul>
<li><a href="przychodnia.php">Przychodnia</a></li>
<li><a href="pacjent.php">Pacjent</a></li>
<li><a href="rejestracja.php">Rejestracja</a></li>
<li><a href="usun.php">Usuwanie pacjenta z bazy</a></li>
</ul>
</nav>
</div>
<div class="pl">
<h3>LISTA PACJENTÓW</h3>
    <?php
    $mysqli = mysqli_connect("localhost", "root", "", "przychodnia");
    $sql = "SELECT `id`,`imie`,`nazwisko`FROM `pacjenci` ";
    $wynik=$mysqli->query($sql);
    while($wiersz=$wynik->fetch_assoc())
    {
        $id=$wiersz['id'];
        $imie=$wiersz['imie'];
        $nazwisko=$wiersz['nazwisko'];
        echo " $id, $imie,$nazwisko <br>";
       
    }
    $mysqli->close();
    ?>
    <br><br>
    <form action="pacjent.php" method="POST">
        Podaj id:<br>
    <input type="number" name="id">
    <input type="submit" name="dane" value="Pokaż dane">
    </form>
    <h3>LEKARZE</h3>
    <ul>
        <li>pn-śr</li>
            <ol>
                <li>Anna Kwiatkowsa</li>
                <li>Jan Kowalski</li>
            </ol>
        <li>czw-pt</li>
            <ol>
                <li>Krzysztof Nowak</li>
            </ol>
    </ul>
</div>
<div class="pp">
<h3>REJESTRACJA PACJENTA</h3>

</div>
<div class="stopka">
<p>UTWORZONE PRZEZ : Dawid Skrzek</p>
<a href="kwerendy.txt">pobierz plik</a>
</div>
</body>
</html>