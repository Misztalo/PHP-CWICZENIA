<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styl_1.css"/>
        <title>Wędkujemy</title>
    </head>
    <body>

        <div id="baner">
            <h1>Portal dla wędkarzy</h1>
        </div>

        <div id="bloklewy">
            <h2>Ryby drapieżne naszych wód</h2>
            <ul>
                <?php
                    $db = new mysqli('localhost', 'root' , '', 'wedkowanie');

                    $sql = "SELECT nazwa , wystepowanie FROM ryby WHERE styl_zycia = 1";

                    $wynik = $db->query($sql);
                    while($wiersz = $wynik->fetch_assoc()) {
                        $nazwa = $wiersz['nazwa'];
                        $wystepowanie = $wiersz['wystepowanie'];
                        echo "<li>$nazwa , wystepowanie : $wystepowanie</li>";
                        }
                    $db->close();
                ?>
            </ul>
        </div>

        <div id="blokprawy">
            <img src="ryba1.jpg" alt="Sum">
            <br>
            <a href="kwerendy.txt">Pobierz kwerendy</a>
        </div>

        <div id="stopka">
            <p>Strone wykonał: 00000000000</p>
        </div>

    </body>
</html>