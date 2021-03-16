<?php
namespace Classes;

require_once '../Front/Candidato_perfil.php';

class Candidato
{
    
    
    
    function Logar($email, $senha)
    {
        $server = "localhost";
        $user = "root";
        $pass = "";
        $banco = "banco";
        
        
        $conn = mysqli_connect($server, $user, $pass, $banco);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM `cadastro` WHERE email = '$email' and $senha";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) 
        {
            
            while($row = $result->fetch_assoc())
            {
                echo "id: " . $row["id"]. "Name: " . $row["nome"]. "email: " . $row["email"]. "<br>";
                
                $id = $row["id"];
                
                echo "<script language='javascript' type='text/javascript'>window.location.href='Candidato_perfil.php';</script>";
                
            }
            
        } 
        else 
        {
            echo "E-mail ou senha estão incorretos";
        }
        $conn->close();
        
        
    }
    
        
    
}

