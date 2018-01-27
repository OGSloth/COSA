<?php
    session_start();

    if(!isset($_SESSION['loged']))
    {
        header('Location: index.php');
        exit();
    }
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Panel Główny</title>
</head>

<body>
<?php
    echo "<p>Witaj ".$_SESSION['First_Name'].'! [<a href="logout.php">Wyloguj się</a>]</p>';
    echo "<br><br>";
    echo "<p><b>Utwórz :</b></p>";
    echo '<p align = "justify">&#x25cf [<a href="tuniej.php">Turniej</a>]</p>';
    echo "<p><b>Wprowadz :</b></p>";
    echo '<p align = "justify">&#x25cf [<a href="proby.php">Statystyki Rozgrywek</a>]</p>';
    echo '<p align = "justify">&#x25cf [<a href="addgame.php">Rozgrywke</a>]</p>';
    echo "<p><b>Sprawdź swoje :</b></p>";
    echo '<p align = "justify">&#x25cf [<a href="mystats.php">Statystyki</a>]</p>';
    echo '<p align = "justify">&#x25cf [<a href="tournaments.php">Turnieje</a>]</p>';
    echo "<p> <b>Znajdz otwarcie po:</b></p>";
    echo '<p align = "justify">&#x25cf [<a href="namesearch.php">Nazwie</a>]</p>';
    echo '<p align = "justify">&#x25cf [<a href ="etsearch.php">Etykiecie</a>]</p>';
    echo '<p align = "justify">&#x25cf [<a href = "movesearch.php">Sekwencji Ruchow</a>]</p>';
    echo "<p>Sprawdź liste Otwarc szachowych: ".'[<a href="handbook.php">HANDBOOK</a>]</href></p>';
    echo '<p><span style="color:red">Uwaga! Lista wszystkich otwarć jest bardzo duza!  Plik moze sie dluzej ladowac! </span></p>';
?>

</body>
</html>
