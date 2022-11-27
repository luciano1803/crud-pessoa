<?php

 require_once'classe-pessoa.php';
 $p = new Pessoa("crudpdo","localhost","root","");
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
    <table>
        <tr id="titulo">
       <td>NOME</td>
       <td>TELEFONE</td>
       <td colspan="2">EMAIL</td>
        </tr>
       <?php
       
          $dados = $p->buscar();

          
           var_dump($dados);
           if(count($dados)>0)
           {
              for($i=0; $i < count($dados); $i++)
              {
                 echo "<tr>";
                foreach($dados[$i] as $k => $v)
                {
                  if($k != "id")
                  {
                     echo"<td>".$v."</td>";
                  }
                }
                 echo"</tr>";
              }
    ?>
                <td><a href="">Editar</a><a href="">Excluir</a></td>
        <?php
           }
        ?>
      
        
    
      
     </table>

    </section>



</body>
</html>