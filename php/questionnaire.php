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
			if((!isset ($_SESSION['cad-email']) == true) and (!isset ($_SESSION['cad-pass']) == true)) 
				{ 
					unset($_SESSION['cad-email']); 
					unset($_SESSION['cad-pass']); 
					header('./login.html'); 
				} 
				$email = $_SESSION['cad-email'];
				$sql = mysql_query("SELECT name, InstID FROM account WHERE email = '$email'");
				while($row = mysql_fetch_array($sql))
					{
				      $nome = $row["name"];
				      $id_instituicao = $row["InstID"];
				    }
				$sql = mysql_query("SELECT name FROM instituicao WHERE instID = '$id_instituicao'");
				while($row = mysql_fetch_array($sql))
					{
				      $nome_inst = $row["name"];
				    }
			?>
		<title>Paideia - Sistema de educação</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" href="http://www.formmail-maker.com/var/demo/jquery-popup-form/colorbox.css" />
        <!-- <script src="http://www.formmail-maker.com/var/demo/jquery-popup-form/jquery.colorbox-min.js"></script> -->

        <script>
            $(document).ready(function(){
                $(".iframe").colorbox({iframe:true, fastIframe:false, width:"450px", height:"480px", transition:"fade", scrolling   : false});
            });
        </script>        
        <style>
            #cboxOverlay{ background:#666666; }
        </style>
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

				<!-- Main -->
						<section class="wrapper style5">
							<div class="inner">
								<section>
									<header>
										<h4><?php echo "$nome - $nome_inst"; ?></h4>
									</header>
									<div class="row">
										<div class="6u 12u$(medium)">
											<h5>Questionários</h5>
												<?php
													$iduser = iduserCheck($email);
													$consulta = mysql_query("SELECT f.name FROM form f, room r, lista_membros l WHERE f.RID = r.RID and l.RID = r.RID and l.IDUser = ".$iduser."");
													while($row = mysql_fetch_array($consulta))
													{
														$aux = $row["name"];
														echo "<a href='questionnaire.php'>".$aux."</a> </br>";

													}
												?>
										</div>
									</div>
									<div class="12u$">
										<center>
											<ul class="actions">
												<li><a class='iframe' href="newquest.php"><input type="submit" value="+" class="special" /></a></li>
											</ul>
										</center>
									</div>
								</section>
							</div>
						</section>
				</article>

			</div>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../assets/js/main.js"></script>
			<script src="../assets/js/jquery.colorbox-min.js"></script>
			<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
			<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        

	</body>
</html>
