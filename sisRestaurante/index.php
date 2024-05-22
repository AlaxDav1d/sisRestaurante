<?php
     include('conexao.php');
     $sqlQuery = "SELECT * FROM itens WHERE id >= 1";
     $sql = $mysqli->query($sqlQuery) or die($mysqli->error);
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Sistema Para o Restaurante</title>
</head>
<style>
     *{
          padding: 0;
          margin: 0;
          box-sizing: border-box;
     }
     body{
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
     }
</style>
<body>
     <h1>Sistema para o Restaurante</h1>
     <table border="1">
          <tr>
               <th>Nome</th>
               <th>Tipo</th>
               <th>Quantidade</th>
               <th>Preço</th>
          </tr>
          <?php
                    while($retorno = $sql->fetch_assoc()){
                         echo("
                              <tr>
                                   <td>$retorno[nome]</td>
                                   <td>$retorno[tipo]</td>
                                   <td>$retorno[quantidade]</td>
                                   <td>$retorno[preco]</td>
                              </tr>
                         ");
                    }
          ?>
     </table>
</body>
</html>