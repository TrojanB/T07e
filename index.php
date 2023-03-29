<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T07e</title>
</head>
<body>

    <form method="post" action="">
        Podaj znaki:
        <input type="text" name="znaki"> <br>

        Podaj długość słów:
        <input type="number" name="dlugosc"> <br>

        Podaj ilość słów:
        <input type="text" name="ilosc">

        <input type="submit">

    </form>

    <?php
    //Trojan Bogacki 3pir
        if (isset($_POST['znaki']) &&
            isset($_POST['dlugosc']) &&
            isset($_POST['ilosc']))
        {
            $znaki = $_POST['znaki'];
            $dlugosc = $_POST['dlugosc'];
            $ilosc = $_POST['ilosc'];
            $tab = str_split($znaki);

            for($i=0;$i<$ilosc;$i++){
                for($j=0;$j<$dlugosc;$j++){
                    $ran = rand(0,count($tab)-1);
                    echo "$tab[$ran]";
                }
                echo "<br>";
            }
        }
    ?>

</body>
</html>