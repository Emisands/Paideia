<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<?php
			include "config.php";
			session_start();
			include "functions.php";
		?>
		<title>Paideia - Sistema de educação</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">Paideia</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="logout.php" class=""><span>Logout</span></a>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main
					<article id="main">
						<header>
							<h2>Cadastro</h2>
						</header> -->


						<section class="wrapper style5">
							<div class="inner">

								<section>

									<center><h4>Instituição <?php
													$name = nameCheck($email);
													$inst = instCheck($name, $email);
													echo "$inst";
												?></h4></center>
									</br>
										<center>
												<ul class="actions">
												<li><a class='iframe' href="classrooms.php"><input type="submit" value="Salas" class="special" /></a></li>
												<li><a class='iframe' href="questionnaire.php"><input type="submit" value="Questionários" class="special" /></a></li>
												</ul>
										</center>
								</section>

							</div>
						</section>
					</article>


			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
