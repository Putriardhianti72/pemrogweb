<!DOCTYPE HTML>
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
    <form method="post" action="terimalogin.php">
        <div class="row gtr-uniform gtr-50">
            
            
            <div class="col-12">
                <input type="email" name="email" id="email" value="" placeholder="Email" />
            </div>
            <div class="col-12">
                <input type="password" name="password" id="password" value="" placeholder="Password" />
            </div>
            <div class="col-12">
                <ul class="actions">
                    <li><input type="submit" name="login" value="login" class="primary" /></li>
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