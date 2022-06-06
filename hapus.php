<?php
require('cetaksession.php');
require('database.php');
$kode = $_GET['target'];
$querydelete = "DELETE FROM pesawat where kode= '$kode' ";
$hasildelete=mysqli_query($koneksi1, $querydelete);
if($hasildelete==1) 
    {echo "berhasil dihapus";} 
    else
{echo "gagal hapus";}
?>
<br>
<a href="cetak_pesanan.php">Lihat</a>
