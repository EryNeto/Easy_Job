<?php
namespace DAO;
header ('Content-type: text/html; charset=ISO-8859-1'); 
//require_once '../CONN/Connect.php';

//require_once '../Front/Candidato_Index.php';


class EmpresaDAO
{
        
    
    function Cadastrar($nome,$email,$senha,$telefone,$localidade,$cnpj,$ramo)
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
        
        
        $sql = "INSERT INTO `cadastro_empresa`( `nome`, `email`, `senha`, `telefone`, `localidade`,`cnpj`,`ramo de atuacao`)
               VALUES ('$nome','$email','$senha','$telefone','$localidade','$cnpj','$ramo')";
        
        
        
        
        
        if ( mysqli_query($connect, $sql))
        {
            echo "Empresa cadastrada com sucesso!";
        }
        
        else
        {
            echo "Erro ao cadastrar empresa!".mysqli_error($connect);
        }
        
        
        
        
        
    } 
    
    
    function Cadastrar_Vaga($cargo,$especialidade,$empresa,$salario,$escolaridade)
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
        
        
        $sql = "INSERT INTO `vaga`(`cargo`, `especialidade`, `empresa`, `salario`, `escolaridade`) 
                VALUES ('$cargo','$especialidade','$empresa','$salario','$escolaridade')";
        
        
        
        
        
        if ( mysqli_query($connect, $sql))
        {
            echo "Vaga cadastrada com sucesso!";
        }
        
        else
        {
            echo "Erro ao cadastrar Vaga!".mysqli_error($connect);
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
        
        $sql = "SELECT * FROM `cadastro_empresa` WHERE email = '$email' and $senha";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0)
        {
            
            echo "<script language='javascript' type='text/javascript'>window.location.href='../Front/Empresa_Home.php';</script>";
            
        }
        else
        {
            echo "E-mail ou senha estão incorretos";
        }
        $conn->close();
            
    }
    
    function Editar($nome,$email,$senha,$telefone,$localidade,$ramo_atuacao,$cnpj,$id)
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
        
        
        
        $sql = "UPDATE `cadastro_empresa`
                SET
                
                `nome`= '$nome',
                `email`= '$email',
                `senha`= '$senha',
                `telefone`= '$telefone',
                `localidade`= '$localidade',
                `ramo de atuacao`= '$ramo_atuacao',
                `cnpj`= '$cnpj'
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
        
        $sql = "SELECT * FROM `cadastro_empresa` WHERE email = '$email' and $senha";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0)
        {
            
            $sql2 = "DELETE FROM `cadastro_empresa` WHERE email = '$email' and $senha";
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




