<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Paideia - Sistema de educação</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" href="http://www.formmail-maker.com/var/demo/jquery-popup-form/colorbox.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">Paideia</a></h1>
					</header>


						<section class="wrapper style5">
							<div class="inner">

								<section>
									<center><h4>Novo Questionário</h4></center>
								<!-- </br> -->
								<!-- Se for professor casatra nova sala -->
									<form name ="newQuestCad" method="post" action="adicionarquest.php">
										<div class="">
										<center>
										</br>
											<div class="6u$ 12u$(xsmall)">
												<input type="text" name="quest-tittle" id="quest-tittle" value="" placeholder="Título do Questionário" />
												<div class="4u 12u$(small)"> 
											</div>
										</br>
											<div class="6u 12u$(xsmall)">
												<textarea name="sala-pertence" id="sala-pertence" placeholder="ID da sala dona do questionário"></textarea>
											</div>
										</br>
										<div class="6u 12u$(xsmall)">
												<textarea name="quest-message" id="quest-message" placeholder="Escreva a questão" rows="6"></textarea>
											</div>
										</br>

											<div class="6u$ 12u$(xsmall)">
												<input type="text" name="altern-01" id="altern-01" value="" placeholder="Alternativa a" />
												</br> 
												<input type="radio" id="reg-priority-1" name="reg-priority" value="1">
												<label for="reg-priority-1">Correta</label>											
											</br>
										</br>
											
												<input type="text" name="altern-02" id="altern-02" value="" placeholder="Alternativa b" />
												</br>
												<input type="radio" id="reg-priority-2" name="reg-priority"  value="2">
												<label for="reg-priority-2">Correta</label>
												</br>
										</br>
											
												<input type="text" name="altern-03" id="altern-03" value="" placeholder="Alternativa c" />
												</br>
												<input type="radio" id="reg-priority-3" name="reg-priority" value="3">
												<label for="reg-priority-3">Correta</label>
												</br>
										</br>
											
												<input type="text" name="altern-04" id="altern-04" value="" placeholder="Alternativa d" />
												</br>
												<input type="radio" id="reg-priority-4" name="reg-priority" value="4">
												<label for="reg-priority-4">Correta</label>
												</br>
										</br>
											
												<input type="text" name="altern-05" id="altern-05" value="" placeholder="Alternativa e" />
												</br>
												<input type="radio" id="reg-priority-5" name="reg-priority" value="5">
												<label for="reg-priority-5">Correta</label>
											</br>
											</div>								
										</br>


										</div>
										</br>
											<div class="12u$">
												<center>
												<ul class="actions">
													<li><input type="submit" value="+" class="special" /></li>
													<li><input type="submit" value="Criar Questionário" class="special" /></li>
												</ul>
												</center>
											</div>
										</center>
										</div>
									</form>
							<!-- Se for aluno, entra em nova sala -->
								<!-- 	<form name ="enterClass" method="post" action="#">
										<div class="">
										<center>
										</br>
											<div class="6u$ 12u$(xsmall)">
												<input type="text" name="class-Cod" id="class-Cod" value="" placeholder="Código da Sala" />
											</div>
										</br>
										/br>
											<div class="12u$">
												<center>
												<ul class="actions">
													<li><input type="submit" value="Entrar Sala" class="special" /></li>
												</ul>
											</center>
											</div>
										</center>
										</div>
									</form> -->
								</section>

							</div>
						</section>
					<!-- </article> -->


			</div>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../assets/js/main.js"></script>

	</body>
</html>
