<?php

 require_once"classe-pessoa.php";
 $p = new pessoa("crudpdo","localhost","root","");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Pessoa</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <section id="esquerda">
     <form>
     <label for="nome">Nome</label>
      <input type="text" name="nome" id="nome">
      <label for="telefone">Telefone</label>
      <input type="text" name="telefone" id="telefone">
      <label for="email">Email</label>
      <input type="text" name="email" id="email">
      <input type="submit" value="cadastrar">
     </form>
    </section>
     
    <section id="direita">
       <?php
       
          $dados = $p->buscar();
          
          echo"<pre>";
           var_dump($dados);
           echo"</pre>";
       ?>
    <table>
        <tr id="titulo">
       <td>NOME</td>
       <td>TELEFONE</td>
       <td colspan="2">EMAIL</td>
        </tr>
        <tr>
       <td>maria</td>
       <td>7145689253</td>
       <td>maria@gmail.com</td>
       <td><a href="">Editar</a><a href="">Excluir</a></td>
        </tr>
     </table>

    </section>



</body>
</html>