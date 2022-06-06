<?php
require('cetaksession.php');
require('database.php');
$queryselect = "SELECT * FROM pesawat, kelas where pesawat.layanan=kelas.id_kelas";
$hasilselect=mysqli_query($koneksi1, $queryselect);
$jumlah=mysqli_num_rows($hasilselect);

echo "Jumlah pemesan: $jumlah </br>";

if($jumlah){
    echo "<table border='1'>";
    echo "
    <tr>
    <th>Kode Tiket</th>,<th>id Layanan</th>,<th>Nama Layanan</th>,<th>nama</th>,<th>email</th>,<th>No Telepon</th>,<th>Tanggal</th>,<th>Edit</th>,<th>Hapus</th>
    </tr>";
    while($row=mysqli_fetch_array($hasilselect)){
        echo "<tr>
        <td>".$row['kode']."</td>
        <td>".$row['layanan']."</td>
        <td>".$row['nama_kelas']."</td>
        <td>".$row['nama']."</td>
        <td>".$row['email']."</td>
        <td>".$row['notelp']."</td>
        <td>".$row['tanggal']."</td>
        <td><a href='editpesanan2.php?target=".$row['kode']."'>edit</a></td>
        <td><a href='hapus.php?target=".$row['kode']."'>Hapus</a></td>
        </tr>";
    }
}
echo "<p><a href='index.php?''>Pesanan Tiket</a></p>";
echo "<p><a href='index.php'>Beranda</a></p>";
?>