<?php

 class pessoa
 {

    private $pdo;
    // conexão com banco de dados
 public function_construct($dbname,$host, $user , $senha)
 {
    try
    {
       $this->pdo = new PDO("mysql:dbname=".$bdname.";host=".$host,$user,$senha);
    }
    catch(PDOException $e)
    {
       echo"Erro com banco de dados:".$se-> getMessage();
       exit();
    }
    catch(Exception $e)
    {
       echo"Erro generico:".$se-> getMessage();
       exit();

    }
 }
    // funcao para buscar dados e colocar no lado direito da tela
    public function buscardados()
    {
      $res = array();  
      $cmd = $this->pdo->query("SELECT * FROM pessoa ORDER BY nome");
      $res = $cmd-> fetchAll(PDO::FETCH_ASSOC);
       return $res;

    }
 }

?>
