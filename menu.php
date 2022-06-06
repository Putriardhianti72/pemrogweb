<!-- Header -->
<?php 
	session_start();?>
<header id="header">
					<h1 id="logo"><a href="index.php">TransUs</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Beranda</a></li>
							<li><a href="katalog.php">Layanan Kami</a></li>
							<li><a href="input.php">Pesan Tiket</a></li>
							<li><a href="kontak.php">Kontak</a></li>
							<li><a href="tentangkami.php">Tentang Kami</a>
							<li><?php if(isset($_SESSION['email'])): ?>
							<a href="cetak_pesanan.php">Data Pesanan</a></li>
							<li><a href="cetaksignin.php">Data User</a></li>
		    				<li><a class="button primary" href="logout.php">Logout</a></li>
							
							<?php else: ?>
							<li><a href="signin.php" class="button primary">Sign Up</a></li>
							<li><a href="login.php" class="button primary">Login</a></li>
							<?php endif ?>
							</li>

						</ul>
					</nav>
				</header>

			