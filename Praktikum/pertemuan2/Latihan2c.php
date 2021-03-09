<?php 
    // Dimas Prayuda
    // 203040120
    // Jum'at 13.00-14.00
    // https://github.com/dimasprayuda212/pw2021_203040120
    // Tugas Praktikum PW
?>
<?php 
    function tumpukanBola($tumpukan){
        for($i = 1; $i <= $tumpukan; $i++){
            for ($j=1; $j <= $i; $j++){
                echo "<div class=\"bola\">$i</div>";
            }
        echo "<br>";
        } 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2c</title>
    <!-- Dimas Prayuda -->
    <style>
    .bola{
        width: 70px;
        height: 70px;
        line-height: 70px;
        display: inline-block;
        background-color: salmon;
        border: 2px solid black;
        border-radius: 100%;
        text-align: center;
        margin: 5px 5px 0 0;
    }
    </style>
</head>
<body>
    <?php tumpukanBola(5); ?>
</body>
</html>