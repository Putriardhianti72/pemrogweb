<?php
  $layanan = $_POST['layanan'];
  $nama = $_POST['namapemesan'];
  $email = $_POST['email'];
  $notelp = $_POST['notelp'];
  $tanggal = $_POST['tanggalpemesanan'];
  $target = $_GET['target'];

  echo "Jenis Layanan: $layanan </br>";
  echo "Nama Pemesan: $nama </br>";
  echo "Alamat Email: $email </br>";
  echo "No Telp: $notelp </br>" ;
  echo "Tanggal Pemesanan : $tanggal </br>";

require('database.php');
$queryinput = "UPDATE `pesawat` SET `layanan` = '$layanan', `nama` = '$nama', `email`='$email',  `notelp` = '$notelp', `tanggal` = '$tanggal' WHERE `pesawat`.`kode` = '$target';";
$hasilqueryinput = mysqli_query($koneksi1, $queryinput);
echo mysqli_error($koneksi1);

if($hasilqueryinput == 1)
{echo "Pemesanan Berhasil </br>";} else {echo "Pemesanan gagal </br>";}
echo "<p><a href='cetak_pesanan.php'>Data Pemesan</a></p>";
echo "<p><a href='index.php'>Beranda</a></p>"
?>
      