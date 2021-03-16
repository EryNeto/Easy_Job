<?php
namespace DAO;
header ('Content-type: text/html; charset=ISO-8859-1'); 
//require_once '../CONN/Connect.php';
//require_once '../Front/Candidato_perfil.php';
//require_once '../Front/Candidato_Index.php';


class CandidatoDAO
{
    
    function Cadastrar($nome,$email,$senha,$telefone,$localidade,$objetivo,$escolaridade,$especialidade,$experiencia,$data,$sexo,$cpf) 
    {
                   
        $servidor = "localhost";
        $banco = "banco";
        $user="root";
        $pass="";
        
        $connect = mysqli_connect($servidor, $user, $pass);
        $select = mysqli_select_db($connect, $banco);
        
        
        
        if (!$connect && !$select) 
        {
            Echo "Erro ao conectar ao banco de dados!";
        }
        
              
       $sql = "INSERT INTO `cadastro_candidato`( `nome`, `email`, `senha`, `telefone`, `localidade`, `objetivo`, `escolaridade`, `especialidade`, `experiencia`, `Data de Nascimento`, `Sexo`, `cpf`) 
               VALUES ('$nome','$email','$senha','$telefone','$localidade','$objetivo','$escolaridade','$especialidade','$experiencia','$data','$sexo','$cpf')";
       
       
      
       
       
       if ( mysqli_query($connect, $sql)) 
       {
        echo "Usuário cadastrado com sucesso!";
       }
       
       else 
       {
           echo "Erro ao cadastrar usuário!".mysqli_error($connect);
       }
       
                     
    } 
     
    function Editar($nome,$email,$senha,$telefone,$localidade,$objetivo,$escolaridade,$especialidade,$experiencia,$data,$sexo,$cpf,$id) 
    {
        $servidor = "localhost";
        $banco = "banco";
        $user="root";
        $pass="";
        
        $connect = mysqli_connect($servidor, $user, $pass);
        $select = mysqli_select_db($connect, $banco);
        
        
        
        if (!$connect && !$select)
        {
            Echo "Erro ao conectar ao banco de dados!";
        }
        
        
        
        $sql = "UPDATE `cadastro_candidato` 
                SET

                `nome`= '$nome',
                `email`= '$email',
                `senha`= '$senha',
                `telefone`= '$telefone',
                `localidade`= '$localidade',
                `objetivo`= '$objetivo',
                `escolaridade`= '$especialidade',
                `especialidade`= '$especialidade',
                `experiencia`= '$experiencia',
                `Data de Nascimento`= '$data',
                `Sexo`= '$sexo',
                `cpf`= '$cpf'
                 WHERE id='$id'";
        
        
        
        
        
        if ( mysqli_query($connect, $sql))
        {
            echo "Usuário atualizado com sucesso!";
        }
        
        else
        {
            echo "Erro ao  usuário!".mysqli_error($connect);
        }
        
    }
    
    function Logar($email, $senha)
    {
        
        //var_dump($email,$senha);
        
        
        $server = "localhost";
        $user = "root";
        $pass = "";
        $banco = "banco";
        
        
        $conn = mysqli_connect($server, $user, $pass, $banco);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM `cadastro_candidato` WHERE email = '$email' and $senha";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0)
        {
            
           echo "<script language='javascript' type='text/javascript'>window.location.href='../Front/Candidato_Home.php';</script>";
                                                    
        }
        else
        {
            echo "E-mail ou senha estão incorretos";
        }
        $conn->close();
        
        
    }
    
    function Deletar($email, $senha)
    {
        
        //var_dump($email,$senha);
        
        
        $server = "localhost";
        $user = "root";
        $pass = "";
        $banco = "banco";
        
        
        $conn = mysqli_connect($server, $user, $pass, $banco);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM `cadastro_candidato` WHERE email = '$email' and $senha";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0)
        {
            
            $sql2 = "DELETE FROM `cadastro_candidato` WHERE email = '$email' and $senha";
            $result2 = $conn->query($sql2);
            
            if ($result2) 
            {
              echo "Conta excluida com sucesso!";
            }           
            
            
            
        }
        else
        {
            echo "E-mail ou senha estão incorretos";
        }
        $conn->close();
        
        
    }
        
}




