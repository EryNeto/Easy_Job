<?php 
header ('Content-type: text/html; charset=ISO-8859-1'); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Candidato Perfil</title>
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
						<li><a href="Home.html" class="button special">Sair</a></li>
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
        
        $query = "SELECT * FROM `cadastro_candidato` WHERE email= '$email_b' and senha='$senha_b'";
        
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
                $objetivo =$linha['objetivo'];
                $data =$linha['Data de Nascimento'];
                $escolaridade =$linha['escolaridade'];
                $especialidade =$linha['especialidade'];
                $experiencia  =$linha['experiencia'];
                $sexo  =$linha['Sexo'];
                $cpf =$linha['cpf'];
                
                

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

                       require_once '../DAO/CandidatoDAO.php';


                       $obj = new \DAO\CandidatoDAO();



                       if (isset($_POST['Nome']))
                        {
                            
                                        
                            $id = addslashes($_POST['Id']) ? $_POST['Id'] : '';
            
                            $nome = addslashes($_POST['Nome']) ? $_POST['Nome'] : '';
            
                            $email = addslashes($_POST['Email'])? $_POST['Email'] : '';
            
                            $senha = addslashes($_POST['Senha'])? $_POST['Senha'] : '';
            
                            $telefone = addslashes($_POST['Telefone'])? $_POST['Telefone'] : '';
            
                            $localidade = addslashes($_POST['Localidade'])? $_POST['Localidade'] : '';
            
                            $objetivo = addslashes($_POST['Objetivo'])? $_POST['Objetivo'] : '';
            
                            $escolaridade = addslashes($_POST['Escolaridade'])? $_POST['Escolaridade'] : '';
            
                            $especialidade = addslashes($_POST['Especialidade'])? $_POST['Especialidade'] : '';
            
                            $experiencia = addslashes($_POST['Experiencia'])? $_POST['Experiencia'] : '';
            
                            $sexo = addslashes($_POST['Sexo']);
            
                            $cpf = addslashes($_POST['Cpf'])? $_POST['Cpf'] : '';
            
                            $data = addslashes($_POST['Data'])? $_POST['Data'] : '';
            
            
            
            
                            $obj->Editar($nome,$email,$senha,$telefone,$localidade,$objetivo,$escolaridade,$especialidade,$experiencia,$data,$sexo,$cpf,$id);
            
            
            
            
                        }




	                    

                     ?>


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

				         <label for="Objetivo">Objetivo:</label></tr><br>
				         <input type="text" name="Objetivo" id="Objetivo" value="<?php echo $objetivo ?>"><br><br>

				         <label for="Data">Data de Nascimento (Ano-Mês-Dia):</label></tr><br>
				         <input type="numeric" name="Data" id="Data" value="<?php echo $data ?>"><br><br>

				         <label for="Escolaridade">Escolaridade:</label></tr><br>
				         <input type="text" name="Escolaridade" id="Escolaridade" value="<?php echo $escolaridade ?>"><br><br>

				         <label for="Especialidade">Especialidade:</label></tr><br>
				         <input type="text" name="Especialidade" id="Especialidade" value="<?php echo $especialidade ?>"><br><br>

				         <label for="Experiencia">Experiência:</label></tr><br>
				         <input type="text" name="Experiencia" id="Experiencia" value="<?php echo $experiencia ?>"><br><br>

				         <label for="Sexo">Sexo:</label></tr><br>
				         <input type="text" name="Sexo" id="Sexo" value="<?php echo $sexo ?>"><br><br>			         

				         <label for="Cpf">Cpf:</label></tr><br>
				         <input type="text" name="Cpf" id="Cpf" value="<?php echo $cpf ?>"><br><br>

				         <input type="submit" name="Editar" value="Editar"><br><br>
				         <a href="Candidato_Deletar.php">Clique aqui para deletar conta</a>
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