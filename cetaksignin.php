<?php
require('cetaksession.php');
require('database.php');
$queryselect = "SELECT * FROM user";
$hasilselect=mysqli_query($koneksi1, $queryselect);
$jumlah=mysqli_num_rows($hasilselect);

echo "Akun yang terdaftar: $jumlah </br>";

if($jumlah){
    echo "<table border='1'>";
    echo "
    <tr>
    <th>email</th>,<th>Password</th>,<th>level</th>
    </tr>";
    while($row=mysqli_fetch_array($hasilselect)){
        echo "<tr>
        <td>".$row['email']."</td>
        <td>".$row['password']."</td>
        <td>".$row['level']."</td>
        </tr>";
    }
}
echo "<p><a href='index.php?target=pesan''>Pesanan Tiket</a></p>";
echo "<p><a href='index.php'>Beranda</a></p>";
?>