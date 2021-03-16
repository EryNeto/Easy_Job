<?php 
header ('Content-type: text/html; charset=ISO-8859-1'); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cadastrar Empresa</title>
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
						<li><a href="Sobre.html">Sobre Nós</a></li>
						<li><a href="Empresa_perfil.php" class="button special">Perfil</a></li>
					</ul>
				</nav>
			</header>


<?php
header ('Content-type: text/html; charset=ISO-8859-1'); 


   
	if (isset($_POST['Email_Buscar']))
	{

		$email_b = addslashes($_POST['Email_Buscar'])? $_POST['Email_Buscar'] : '';
		    
	    $senha_b = addslashes($_POST['Senha_Buscar'])? $_POST['Senha_Buscar'] : '';


		$server = "localhost";
        $banco   = "banco";
        $user = "root";
        $pass = "";
      
        $conn = mysqli_connect($server, $user, $pass, $banco);
        
        $query = "SELECT * FROM `cadastro_empresa` WHERE email= '$email_b' and senha='$senha_b'";
        
        $dados = mysqli_query($conn, $query);
        
        $linha = mysqli_fetch_assoc($dados);
        
        $total = mysqli_num_rows($dados);

        global $id;

        if ($total>0) 
        {
        	do
        	{
        		$id = $linha['id'];
        		$nome = $linha['nome'];
                $email =$linha['email'];
                $senha =$linha['senha'];
                $telefone =$linha['telefone'];
                $localidade =$linha['localidade'];
                $cnpj =$linha['cnpj'];
                $ramo_atuacao =$linha['ramo de atuacao'];

                
                
                

             }

        	while($linha = mysqli_fetch_assoc($dados));


        }	  
        
        
	}

?>

	<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Consultar dados</h2>
						<p>Digite seu e-mail e senha para visualizar seus dados</p>
					</header>


					<form method="post">
						
						 <label for="Email_Buscar">Email: </label></tr><br>
				         <input type="text" name="Email_Buscar" id="Email_Buscar"><br><br>

                         <label for="Senha_Buscar">Senha:</label></tr><br>
				         <input type="password" name="Senha_Buscar" id="Senha_Buscar"><br><br>

				         <input type="submit" name="Buscar">

					</form>

					  <?php
                       header ('Content-type: text/html; charset=ISO-8859-1'); 

                       require_once '../DAO/EmpresaDAO.php';


                       $obj = new \DAO\EmpresaDAO();



                       if (isset($_POST['Nome']))
                        {
                            
                                        
                            $id = addslashes($_POST['Id']) ? $_POST['Id'] : '';
            
                            $nome = addslashes($_POST['Nome']) ? $_POST['Nome'] : '';
            
                            $email = addslashes($_POST['Email'])? $_POST['Email'] : '';
            
                            $senha = addslashes($_POST['Senha'])? $_POST['Senha'] : '';
            
                            $telefone = addslashes($_POST['Telefone'])? $_POST['Telefone'] : '';
            
                            $localidade = addslashes($_POST['Localidade'])? $_POST['Localidade'] : '';
            
                            $ramo_atuacao = addslashes($_POST['Ramo_atuacao'])? $_POST['Ramo_atuacao'] : '';

                            $cnpj = addslashes($_POST['cnpj'])? $_POST['cnpj'] : '';
            
            
                         
            
            
            
            
                            $obj->Editar($nome,$email,$senha,$telefone,$localidade,$ramo_atuacao,$cnpj,$id);
            
            
            
            
                        }




	                    

                     ?>

	
	<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Perfil empresarial</h2>
						<p>Cadastre para desfrutar as facilidades na busca de novos colaboradores</p>
					</header>

					<form method="post">
						 <input type="numeric" name="Id" id="Id" value="<?php echo $id ?>" object.style.visibility="hidden"><br><br>
			
				         <label for="Nome">Nome: </label></tr><br>
				         <input type="text" name="Nome" id="Nome" value="<?php echo $nome ?>"><br><br>

				         <label for="Email">Email:</label></tr><br>
			             <input type="email" name="Email" id="Email" value="<?php echo $email ?>"><br><br>
			
				         <label for="Senha">Senha:</label></tr><br>
				         <input type="password" name="Senha" id="Senha" value="<?php echo $senha ?>"><br><br>

				         <label for="Telefone">Telefone:</label></tr><br>
				         <input type="text" name="Telefone" id="Telefone" value="<?php  echo $telefone ?>"><br><br>

			             <label for="Localidade">Localidade:</label></tr><br>
				         <input type="text" name="Localidade" id="Localidade" value="<?php echo $localidade ?>"><br><br>
				        
				         <label for="Ramo_atuacao">Ramo de atuação:</label></tr><br>
				         <input type="text" name="Ramo_atuacao" id="Ramo_atuacao" value="<?php echo $ramo_atuacao ?>"><br><br>				         		         

				         <label for="cnpj">cnpj:</label></tr><br>
				         <input type="text" name="cnpj" id="cnpj" value="<?php echo $cnpj ?>"><br><br>

				         <input type="submit" name="Editar" value="Editar"><br><br>
				         <a href="Empresa_Deletar.php">Clique aqui para deletar conta</a>
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