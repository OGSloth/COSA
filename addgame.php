<?php
session_start();
require_once "connect.php";
$connection = @new mysqli($host, $db_user, $db_password, $db_name);
if(!isset($_SESSION['loged']))
{
    header('Location: index.php');
    exit();
}
$valid = true;
$sql = "Select * from Opening";
$response = @mysqli_query($dbc, $sql);
echo '[<a href="panel.php">Wroc</a>]</href></p>';
echo "<br><br>";
?>


<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>COSA - Chess Openings Simple Analyzer</title>
</head>
<body>
<form method="post">
    <?php
    echo '
<p><center><b>Wybierz otwarcie</center></b>';
    echo '<br><br>';
    if($response) {
        echo '<center><select name="formGame"></center>';
        echo '<option value = "None" > Wybierz</option >';
        while ($row = mysqli_fetch_array($response)) {
            $OpName = $row['Name'];
            $OpId = $row['Id'];
            echo '<option value = '.$OpId.' >'.$OpName.'</option >';
        }
    }
    echo'
</select>
</p>';
?>
<p><center>Wybierz swój kolor bierek:</center></p>
    <select name = "color">
        <option value = "white">Biale</option>
        <option value = "black">Czarne</option>
    </select>
    <p><center>Wybierz zwycieski kolor bierek:</center></p>
    <select name = "winner">
        <option value = "white">Biale</option>
        <option value = "black">Czarne</option>
    </select>
</form>

</body>
</html>
