<?php
/*
Dimas Prayuda
203040120
https://github.com/dimasprayuda212/pw2021_203040120
Pertemuan 3 - 23 Februari 2021
Mempelajari mengenai Struktur Kendali PHP
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style> 
</head>
<body>
    
<table border="1" cellpadding="10" cellspacing="0">
    <?php for( $i = 1; $i <= 5; $i++ ) : ?>
        <?php if( $i % 2 == 0 ) : ?>
            <tr class="warna-baris">
        <?php else : ?>
            <tr>
        <?php endif; ?>
            <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                <td><?= "$i, $j"; ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

</body>
</html>