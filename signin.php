

<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>My account</title>
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
    <h3>Akun saya</h3>
    <form method="post" action="terimasignin.php">
        <div class="row gtr-uniform gtr-50">
            
            
            <div class="col-12">
                <input type="email" name="email" id="email" value="" placeholder="Email" />
            </div>
            <div class="col-12">
                <input type="password" name="password" id="password" value="" placeholder="Password" />
            </div>
			<div class="col-12">
			<select name="level" id="level">
			<option value="">- Daftar Sebagai -</option>
			<option value="admin">Admin</option>
			<option value="pengguna">Pengguna</option>
			</select>
            <div class="col-6 col-12-medium">
                <input type="checkbox" id="copy" name="copy">
                <label for="copy">Email me a copy of this message</label>
            </div>
            <div class="col-6 col-12-medium">
                <input type="checkbox" id="human" name="human" checked>
                <label for="human">I am a human and not a robot</label>
            </div>
            <div class="col-12">
                <ul class="actions">
                    <li><input type="submit" value="Sign Up" class="primary" /></li>
                    <li><input type="reset" value="Reset" /></li>
                </ul>
            </div>
        </div>
    </form>
</section>
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