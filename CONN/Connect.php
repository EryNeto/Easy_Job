<?php

namespace CONN;

class Connect
{
    private $host="localhost";
    private $user="root";
    private $senha = "";
    private $banco = "banco";
    
    public $conn;
    
    public $ab;
    
    function __construct()
    {
        $this->Conectar();
    }
    
    function Conectar($ab)
    {
        $conn = mysqli_connect($this->host,$this->user,$this->senha,$this->banco) or die("Erro ao conectar com o banco de dados".mysql_error($conn));
        // $conn = mysqli_select_db($this->banco)or die("Erro ao selecionar o banco de dados".mysql_error());
        //return $conn;
        
        $ab = "Abobrinha";
        
        
    }
    
    
}