<?php
session_start();
require_once "connect.php";
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
echo '[<a href="panel.php">Wroc</a>]</href></p>';
echo "<br><br>";
?>

<form action="resultname.php" method="POST">
    <center><h3>Znajdz otwarcie po nazwie</h3></center>
    <center><table>
            <tr>
                <td>Search</td>
                <td><input type="text" name="op_name" size="100"></td>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table></center>
</form>

</body>
</html>

