

<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Pemesanan</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

        <?php
        require('menu.php');
        ?>

<!-- Main -->
<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>For our customer</h2>
							<p>We'll take care of the transportation details</p>
                        </header>
                        
<!-- Form -->
<section>
    <h2>Data Pesanan </h2><br><br>
    <form method="post" action="output.php">
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
                <input type='text' name='namapemesan' id='namapemesan' value='' placeholder='' required>
            </div>   
        <h3>Alamat Email </h3>
            <div class="col-12">
                <input type="email" name="email" id="email" value="" placeholder="Email" required>
            </div>
            <h3>No telepon </h3>
            <div class="col-12">
                <input type="text" name="notelp" id="notelp" value="" placeholder="" required>
            </div> 
            <h3>Tanggal pemesanan</h3>
            <div class="col-12">
                <input type="date" name="tanggalpemesanan" id="tanggalpemesanan" value="" placeholder="" required>
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
                
							</div>
						</div>
					</div>
				</div>

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