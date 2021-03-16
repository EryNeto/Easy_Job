<?php 
header ('Content-type: text/html; charset=ISO-8859-1'); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cadastrar candidato</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
</head>
<body>

	<header id="header">
				<h1><a href="Home.html">Easy Job</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="Home.html">Home</a></li>
						<li><a href="Sobre.html">Sobre N�s</a></li>
						<li><a href="Empresa_perfil.php" class="button special">Perfil</a></li>
					</ul>
				</nav>
			</header>

<?php
header ('Content-type: text/html; charset=ISO-8859-1'); 
require_once '../DAO/EmpresaDAO.php';
//require_once 'CONN/Connect.php'; 

$obj = new \DAO\EmpresaDAO();

	if (isset($_POST['Cargo']))
	{
	    	      
	    
		$cargo = addslashes($_POST['Cargo']) ? $_POST['Cargo'] : '';
		$especialidade = addslashes($_POST['Especialidade']) ? $_POST['Especialidade'] : '';
		$empresa  = addslashes($_POST['Nome_Empresa']) ? $_POST['Nome_Empresa'] : '';
		$salario = addslashes($_POST['Salario']) ? $_POST['Salario'] : '';
		$escolaridade = addslashes($_POST['Escoladidade']) ? $_POST['Escoladidade'] : '';

	

	    
	    $obj->Cadastrar_Vaga($cargo,$especialidade,$empresa,$salario,$escolaridade);
	    
	    
        
	    
	    
	    
	    
	   	
	}

?>
	
	<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Cadastro de candidato</h2>
						<p>Cadastre para desfrutar as facilidades na busca de seu novo emprego</p>
					</header>

					<form method="post">
			
				<label for="Cargo">Cargo: </label></tr><br>
				<input type="text" name="Cargo" id="Cargo"><br><br>

				<label for="Especialidade">Especialidade: </label></tr><br>
				<input type="text" name="Especialidade" id="Especialidade"><br><br>

				<label for="Nome_Empresa">Nome da empresa: </label></tr><br>
				<input type="text" name="Nome_Empresa" id="Nome_Empresa"><br><br>

				<label for="Salario">Sal�rio: </label></tr><br>
				<input type="text" name="Salario" id="Salario"><br><br>

				<label for="Escoladidade">Escoladidade: </label></tr><br>
				<input type="text" name="Escoladidade" id="Escoladidade"><br><br>

				

				<input type="submit" name="Cadastrar">
			
		</form>

					
				</div>
			</section>


	
		

	

	<footer id="footer">
				<div class="container">
					<section class="links">
						<div class="row">
							<section class="3u 6u(medium) 12u$(small)">
								<h3>Lorem ipsum dolor</h3>
								<ul class="unstyled">
									<li><a href="#">Lorem ipsum dolor sit</a></li>
									<li><a href="#">Nesciunt itaque, alias possimus</a></li>
									<li><a href="#">Optio rerum beatae autem</a></li>
									<li><a href="#">Nostrum nemo dolorum facilis</a></li>
									<li><a href="#">Quo fugit dolor totam</a></li>
								</ul>
							</section>
							<section class="3u 6u$(medium) 12u$(small)">
								<h3>Culpa quia, nesciunt</h3>
								<ul class="unstyled">
									<li><a href="#">Lorem ipsum dolor sit</a></li>
									<li><a href="#">Reiciendis dicta laboriosam enim</a></li>
									<li><a href="#">Corporis, non aut rerum</a></li>
									<li><a href="#">Laboriosam nulla voluptas, harum</a></li>
									<li><a href="#">Facere eligendi, inventore dolor</a></li>
								</ul>
							</section>
							<section class="3u 6u(medium) 12u$(small)">
								<h3>Neque, dolore, facere</h3>
								<ul class="unstyled">
									<li><a href="#">Lorem ipsum dolor sit</a></li>
									<li><a href="#">Distinctio, inventore quidem nesciunt</a></li>
									<li><a href="#">Explicabo inventore itaque autem</a></li>
									<li><a href="#">Aperiam harum, sint quibusdam</a></li>
									<li><a href="#">Labore excepturi assumenda</a></li>
								</ul>
							</section>
							<section class="3u$ 6u$(medium) 12u$(small)">
								<h3>Illum, tempori, saepe</h3>
								<ul class="unstyled">
									<li><a href="#">Lorem ipsum dolor sit</a></li>
									<li><a href="#">Recusandae, culpa necessita nam</a></li>
									<li><a href="#">Cupiditate, debitis adipisci blandi</a></li>
									<li><a href="#">Tempore nam, enim quia</a></li>
									<li><a href="#">Explicabo molestiae dolor labore</a></li>
								</ul>
							</section>
						</div>
					</section>
					<div class="row">
						<div class="8u 12u$(medium)">
							<ul class="copyright">
								<li>&copy; Untitled. All rights reserved.</li>
								<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
								<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
							</ul>
						</div>
						<div class="4u$ 12u$(medium)">
							<ul class="icons">
								<li>
									<a class="icon rounded fa-facebook"><span class="label">Facebook</span></a>
								</li>
								<li>
									<a class="icon rounded fa-twitter"><span class="label">Twitter</span></a>
								</li>
								<li>
									<a class="icon rounded fa-google-plus"><span class="label">Google+</span></a>
								</li>
								<li>
									<a class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>

</body>
</html>