
    <?php 
	$email = $_POST['email'];
	$password = $_POST['password'];
    $level = $_POST['level'];

    echo "Alamat Email: $email </br>";
    echo "Anda login sebagai : $level </br>";

    require('database.php');
$queryinput = "INSERT INTO user(email, password, level)
VALUES ('$email','$password','$level')";
$hasilqueryinput = mysqli_query($koneksi1, $queryinput);

if($hasilqueryinput == 1)
{echo "Berhasil masuk </br>";} else {echo "Akun gagal </br>";}
echo "<p><a href='cetaksignin.php'>Data Pemesan</a></p>"
 ?>         