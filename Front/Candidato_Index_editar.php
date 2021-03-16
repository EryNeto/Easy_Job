<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastrar candidato</title>
</head>
<body>

<?php

require_once '../DAO/CandidatoDAO.php';
//require_once 'CONN/Connect.php'; 

$obj = new \DAO\CandidatoDAO();

	if (isset($_POST['Nome']))
	{
	    //$p = new Candidato();
	    
	  
	    
		$nome = addslashes($_POST['Nome']) ? $_POST['Nome'] : '';
	
	    $email = addslashes($_POST['Email'])? $_POST['Email'] : '';
	
	    $data =  addslashes($_POST['Data_de_nascimeto'])? $_POST['Data_de_nascimeto'] : '';
	
	    $senha = addslashes($_POST['Senha'])? $_POST['Senha'] : '';
	
	    $telefone = addslashes($_POST['Telefone'])? $_POST['Telefone'] : '';
	
	    $localidade = addslashes($_POST['Localidade'])? $_POST['Localidade'] : '';
	
	    $objetivo = addslashes($_POST['Objetivo'])? $_POST['Objetivo'] : '';
	
	    $escolaridade = addslashes($_POST['Escolaridade'])? $_POST['Escolaridade'] : '';
	
	    $especialidade = addslashes($_POST['Especialidade'])? $_POST['Especialidade'] : '';
	
	    $experiencia = addslashes($_POST['Experiencia'])? $_POST['Experiencia'] : '';
    
	   // $p->Cadastrar($nome, $email, $senha, $telefone, $localidade, $objetivo, $escolaridade, $especialidade, $experiencia, $data);
	   
	   // var_dump($nome,$email,$senha,$telefone,$localidade);
	    
	    $obj->Cadastrar($nome,$email,$senha,$telefone,$localidade);
	    
	    
	    
	   	
	}

?>
	
	<section id="form">

		<form method="post">
			
				<label for="Nome">Nome: </label></tr><br>
				<input type="text" name="Nome" id="Nome"><br><br>

				<label for="Email">Email:</label></tr><br>
			    <input type="email" name="Email" id="Email"><br><br>

				<label for="Data_de_nascimeto">Data de nascimeto:</label></tr><br>
				<input type="date" name="Data_de_nascimeto" id="Data_de_nascimeto"><br><br>

				<label for="Senha">Senha:</label></tr><br>
				<input type="password" name="Senha" id="Senha"><br><br>

				<label for="Telefone">Telefone:</label></tr><br>
				<input type="text" name="Telefone" id="Telefone"><br><br>

			    <label for="Localidade">Localidade:</label></tr><br>
				<input type="text" name="Localidade" id="Localidade"><br><br>

				<label for="Objetivo">Objetivo:</label></tr><br>
				<input type="text" name="Objetivo" id="Objetivo"><br><br>

				<label for="Escolaridade">Escolaridade:</label></tr><br>
				<input type="text" name="Escolaridade" id="Escolaridade"><br><br>

				<label for="Especialidade">Especialidade:</label></tr><br>
				<input type="text" name="Especialidade" id="Especialidade"><br><br>

				<label for="Experiencia">Experiência:</label></tr><br>
				<input type="text" name="Experiencia" id="Experiencia"><br><br>

				<input type="submit" name="Cadastrar">
			
		</form>
		

	
	</section>

</body>
</html>