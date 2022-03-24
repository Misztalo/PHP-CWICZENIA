<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Twój wskaźnik BMI</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <div id="baner">
        <h2>Oblicz wskaźnik BMI</h2>
    </div>
    <div id="logo">
        <img src="wzor.png" alt="liczymy BMI">
    </div>
    <div id="lewy">
        <img src="rys1.png" alt="zrzuc kalorie!">
    </div>
    <div id="prawy">
        <h1>Podaj dane</h1>
        <form action="waga.php" method="POST">
            Waga: <input type="number" name="waga"><br>
            Wzrost[cm]: <input type="number" name="wzrost"><br>
            <input type="submit" value="Licz BMI i zapisz wynik">
        </form>
        <?php 
        if(isset($_POST['waga']) && isset($_POST['wzrost']))
        $conn = mysqli_connect("localhost" , "root" , "" , "egzamin");
        $waga = $_POST['waga'];
        $wzrost = $_POST['wzrost'];
        $obliczenie = ($waga/($waga*$wzrost));
        $wynik = ($obliczenie*10000);
        $data = date("Y-m-d");

        echo "Twoja waga: ".$waga."; Twój wzrost : ".$wzrost."</br>"." BMI wynosi :".$wynik;
        if($wynik>=0 && $wynik < 19){
            $zapytanie = "INSERT INTO wynik (id , bmi_id , data_pomiaru , wynik) VALUES (NULL , 1 , '$data' , '$wynik')";
            mysqli_query($conn , $zapytanie);
        }
        else if($wynik>=19 && $wynik < 26){
            $zapytanie = "INSERT INTO wynik (id , bmi_id , data_pomiaru , wynik) VALUES (NULL , 1 , '$data' , '$wynik')";
            mysqli_query($conn , $zapytanie);            
        }
        else if($wynik>=26 && $wynik < 31){
            $zapytanie = "INSERT INTO wynik (id , bmi_id , data_pomiaru , wynik) VALUES (NULL , 1 , '$data' , '$wynik')";
            mysqli_query($conn , $zapytanie);            
        }
        else if($wynik>=31 && $wynik < 100){
            $zapytanie = "INSERT INTO wynik (id , bmi_id , data_pomiaru , wynik) VALUES (NULL , 1 , '$data' , '$wynik')";
            mysqli_query($conn , $zapytanie);            
        }


        mysqli_close($conn);
        ?>
    </div>
    <div id="glowny">
        <table>
            <tr>
                <th>lp.</th>
                <th>Interpretacja</th>
                <th>zaczyna się od...</th>
            </tr>
            <?php
                $conn = mysqli_connect("localhost" , "root" , "" , "egzamin");
                $zap = "SELECT id , informacja , wart_min FROM bmi";
                $qu = mysqli_query($conn , $zap);
                while($linia = mysqli_fetch_row($qu))
                {
                echo "<tr>";
                echo "<td>".$linia[0]."</td>";
                echo "<td>".$linia[1]."</td>";
                echo "<td>".$linia[2]."</td>";
                echo "</tr>";
                }

                mysqli_close($conn);

            ?>
        </table>
    </div>
    <div id="stopka">
        <a>Autor: 000000000</a>
        <a href="kw2.jpg">Wynik działania kwerendy 2</a>
    </div>
</body>
</html>