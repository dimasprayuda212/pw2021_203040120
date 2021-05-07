<?php
/*
Dimas Prayuda
203040120
https://github.com/dimasprayuda212/pw2021_203040120
Pertemuan 12 - 07 Mei 2021
Mempelajari mengenai login dan registrasi
*/
?>

<?php
session_start();
session_destroy();
header("Location: login.php");
exit;

?>