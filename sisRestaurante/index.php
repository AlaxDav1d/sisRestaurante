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
          font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
     }
     body{
          display: flex;
          flex-direction: column;
          align-items: center;
          background-image: linear-gradient(to bottom left,rgb(92, 12, 12),rgba(81,6,1,1));
          background-repeat: no-repeat;
          height: 100vh;
          padding: 1%;
     }
     .scroll{
          overflow-x: hidden;
          z-index: 1;
          overflow-y: scroll;
          padding-bottom: 2%;
     }
     h1{
          margin-bottom: 3%;
          color: yellow;
     }
     table{
          text-align: center;
          border-collapse: collapse;
          border-color: yellow;
          color: #fff;
     }
     td{
          padding: 1%;
          width: 10%;
          user-select: none;
          text-transform: capitalize;
     }
     .lixeira img{
          width: 15%;
     }
     .imagem img{
          width: 10%;
          filter: invert(0.1) saturate(2) brightness(3) ;
     }
     a{
          color: yellow;
          margin-top: 5%;
          font-size: 120%;
          transition: 200ms;
     }
     a:hover{
          color: #fff;
     }
     .fix{
          display: flex;
          align-items: center;
          justify-content: center;
          width: 100%;
          height: 15%;
          text-align: center;
          padding-right: 0.8%;
          border: 1px solid yellow ;
     }
     span{
          color: #fff;
          flex: 1;
     }
</style>
<body>
     <h1>Sistema para o Restaurante</h1>
     <div class="fix">

               <span>Nome</span>
               <span>Tipo</span>

               <span>Quantidade</span>
               <span>Preço</span>
     
               <span>Editar</span>
               <span>Excluir</span>

     </div>
     <div class="scroll">
          <table border="1" >
               <?php
                         while($retorno = $sql->fetch_assoc()){
                              echo("
                              <tr>
                                        <td>$retorno[nome]</td>
                                        <td>$retorno[tipo]</td>
                                        <td>$retorno[quantidade]</td>
                                        <td>R$$retorno[preco]</td>
                                        <td class='imagem'><img src='https://github.com/AlaxDav1d/PeraClicker/blob/master/estilos/lapis.png?raw=true'></td>
                                        <td class='lixeira'><img src='https://github.com/AlaxDav1d/PeraClicker/blob/master/estilos/Lixeira%20Amarela.png?raw=true'   alt='icone Lixeira'></td>
                                   </tr>
                              ");
                         }
               ?>
          </table>
     </div>
     <a href="cadastro.php">Cadastrar novos Produtos</a>
</body>
</html>