
    <?php 
    $layanan = $_POST['layanan'];
	$nama = $_POST['namapemesan'];
	$email = $_POST['email'];
	$notelp = $_POST['notelp'];
    $tanggal = $_POST['tanggalpemesanan'];

    echo "Jenis Layanan: $layanan </br>";
    echo "Nama Pemesan: $nama </br>";
    echo "Alamat Email: $email </br>";
    echo "No Telp: $notelp </br>" ;
    echo "Tanggal Pemesanan : $tanggal </br>";

    require('database.php');
$queryinput = "INSERT INTO pesawat(kode, layanan, nama, email, notelp, tanggal)
VALUES ('','$layanan','$nama','$email','$notelp','$tanggal')";
$hasilqueryinput = mysqli_query($koneksi1, $queryinput);

if($hasilqueryinput == 1){
    echo "Pemesanan Berhasil </br>";} else {echo "Pemesanan gagal </br>";}
    echo "<p><a href='cetak_pesanan.php?target=".$email."'>Data Pemesan</a></p>"
 ?>            
      
        