

<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Edit Pesanan</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">
        <?php
    require('cetaksession.php');

    $target=$_GET['target'];
    require('database.php');
    $queryselect = "SELECT * FROM pesawat where kode='$target'";
    $hasilselect=mysqli_query($koneksi1, $queryselect);
    $row2=mysqli_fetch_array($hasilselect);
?>
<!-- Main -->
<div id="main" class="wrapper style1">
					<div class="container">
                        
<!-- Form -->
<section>
    <h2>Data Pesanan </h2><br><br>
    <form method="post" action="terimaedit.php?target= <?= $target ?>">
    <?php
                 require('database.php');
                $queryselect = "SELECT * FROM kelas";
                $hasilselect=mysqli_query($koneksi1, $queryselect);?>
        <h3>Jenis Layanan</h3>
                <select name="layanan" id="">
                    <?php while($row=mysqli_fetch_array($hasilselect)) :?>
                        <option value="<?= $row['id_kelas'] ?>">
                            <?= $row['nama_kelas'] ?>
                        </option>
                    <?php endwhile ?>
                </select>
        <div class="row gtr-uniform gtr-50">
        <h3>Nama Pemesan </h3>
            <div class="col-12">
                <input type='text' name='namapemesan' id='namapemesan' value='<?= $row2['nama']?>' placeholder='' required>
            </div>   
        <h3>Alamat Email </h3>
            <div class="col-12">
                <input type="email" name="email" id="email" value="<?= $row2['email']?>" placeholder="Email" required>
            </div>
            <h3>No telepon </h3>
            <div class="col-12">
                <input type="text" name="notelp" id="notelp" value="<?= $row2['notelp']?>" placeholder="" required>
            </div> 
            <h3>Tanggal pemesanan</h3>
            <div class="col-12">
                <input type="date" name="tanggalpemesanan" id="tanggalpemesanan" value="<?= $row2['tanggal']?>" placeholder="" required>
            </div> 
            
            <h3>Bukti Identitas</h3>
            <div class="col-12">
			 			</div>
                       
              <input type="hidden" name="MAX_FILE_SIZE" value="40000">
              <input type="file" accept="image/*" id="identity" placeholder="Upload Kartu Identitas" name="identitas" >
            
                     </div>
            <div class="col-6 col-12-medium">
                <input type="checkbox" id="copy" name="copy">
                <label for="copy">Email me a copy of this message</label>
            </div>
            <div class="col-12">
                    <input type="submit" value="Submit" class="primary" />
                    <input type="reset" value="Cancel" class="primary" />            
            </div>
        </div>
    </form>
</section>

<!-- Footer -->
				<footer id="footer">
					
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Designed by: Putri Widya </a></li>
					</ul>
				</footer>
        </div>
        
        <!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>