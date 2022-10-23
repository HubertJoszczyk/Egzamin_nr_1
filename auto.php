<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="auto.css">
    <title>Komis samochodowy</title>
</head>
<body>
    <header>
        <h1>Samochody</h1>
    </header>
    <div id="left">
        <h2>Wykaz samochodów</h2>
        <ul>
            <?php   skrypt1();  ?>
        </ul>
        <h2>Zamówienia</h2>
        <ul>
            <?php   skrypt2();  ?>
        </ul>
    </div>
    <div id="right">
        <h2>Pełne dane: Fiat</h2>
            <?php skrypt3()     ?>
    </div>
    <footer>
        <table>
        <td><a href="kwerendy.txt">Kwerendy</a></td>
        <td>Autor:Hubert Joszczyk</td>
        <td><img src="auto.png" alt="komis samochodowy"></td>
        </table>
    </footer>
</body>
</html>

<?php
function skrypt1(){
    $host="localhost";
    $user="root";
    $pass="";
    $db="komis";
    $conn=mysqli_connect($host,$user,$pass,$db);
    $sql="SELECT id,marka,model from samochody";
    $res=mysqli_query($conn,$sql);

    while($row=mysqli_fetch_assoc($res)){
        echo "<li>".$row['id']." ".$row['marka']." ".$row['model']."</li>";
    }
    mysqli_close($conn);
}
function skrypt2(){
    $host="localhost";
    $user="root";
    $pass="";
    $db="komis";
    $conn=mysqli_connect($host,$user,$pass,$db);
    $sql="SELECT id,klient from zamowienia;";
    $res=mysqli_query($conn,$sql);

    while($row=mysqli_fetch_assoc($res)){
        echo "<li>".$row['id']." ".$row['klient']."</li>";
    }
    mysqli_close($conn);
}
function skrypt3(){
    $host="localhost";
    $user="root";
    $pass="";
    $db="komis";
    $conn=mysqli_connect($host,$user,$pass,$db);
    $sql="SELECT id,marka,model,rocznik,kolor,stan from samochody where marka='Fiat'";
    $res=mysqli_query($conn,$sql);

    while($row=mysqli_fetch_assoc($res)){
        echo "<li>".$row['id']." / ".$row['marka']." / ".$row['model']." / ".$row['rocznik']." / ".$row['kolor']." / ".$row['stan']."</li>";
    }
    mysqli_close($conn);
}
?>