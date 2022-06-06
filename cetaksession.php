<?php
session_start();
echo "username session : ".$_SESSION['email']."</br>";
echo "username level : ".$_SESSION['level']."</br>";



if($_SESSION['level']!='admin'){
echo "Anda Bukan Admin";
header('Location: index.php?target=login');
exit;
}
echo "<p><a href='index.php'>Beranda</a></p>";

?>