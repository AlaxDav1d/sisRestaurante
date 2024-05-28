<?php
     include('conexao.php');
     $nome = $_GET[$mysqli->real_escape_string('nome')];
     $select = $_GET[$mysqli->real_escape_string('tipo')];
     $quant = $_GET['quant'];
     $valor = $_GET['valor'];

     //CRIAR FUNCAO PARA ATUALIZAR A QUANTIDADE;
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Cadastrar Produtos</title>
</head>
<style>
     @keyframes anima{
          25%{
               box-shadow: 0.1px 1px 5px yellow;
          }
          50%{
               box-shadow: 1px 1px 10px yellow;
               
          }
          75%{
               box-shadow: 0.1px 0.1px 5px yellow;
          }
          100%{
               box-shadow: 1px 1px 10px yellow;
          }
     }
     *{
          padding: 0;
          margin: 0;
          box-sizing: border-box;
          font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
     }
     body{
          height: 100%;
          width: 100%;
          background-image: linear-gradient(to bottom left,rgb(92, 12, 12),#000);
     }
     .forms{
          display: flex;
          justify-content: center;
          margin: 12% 0;
     }
     form{
          width: 30%;
          padding: 2%;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          color: #fff;
          transform: scale(0.99);
          border: 0.1px solid transparent; 
          transition: 800ms;
          animation: anima 8s infinite alternate;
     }
     form input{
          width: 100%;
          padding: 1%;
          border-radius: 30px;
          border: none;
          padding-left: 2%;
          text-transform: capitalize;
          outline: none;
     }
     select{
          align-self: baseline;
          width: 41%;
          padding: 1%;
          text-transform: capitalize;
          border-radius: 30px;
          border: none;
     }
     input[type='submit']{
          margin-top: 9%;
          width: 50%;
          margin-bottom: 5%;
          background-color: #fff;
          transition: 800ms;
     }
     input[type='submit']:hover{
          background-color: #000;
          color: #fff;
          border: 1px solid yellow;
          width: 40%;
     }
     form p{
          align-self: baseline;
          margin-top: 9%;
          margin-bottom: 3%;
     }
     .valores{
          margin-top: 4%;
          display: flex;
          justify-content: space-between;
          width: 100%;
     }
     .valores input{
          padding: 3%;
          width: 100%;
     }
</style>
<body>
     <div class="forms">
          <form action="" method="get" >
               <p>Nome do Item:</p>
               <input type="text" name="nome" id="nome">
               <p>Tipo de Item:</p>
                    <select name="tipo">
                         <option value="bebida">bebida</option>
                         <option value="prato">prato</option>
                    </select>
               <div class="valores">
                    <div class="itens">
                         <p>Quantidade a Adicionar:</p>
                         <input type="number" name="quant">
                    </div>
                    <div class="itens">
                         <p>Valor do Item:</p>
                         <input type="number" name="valor" step="0.05" min="0.50" >
                    </div>
               </div>
               <input type="submit" value="Enviar">    
               <?php
                    if($nome != ""  && $select != '' && $quant != '' && $valor != ''){
                         $querySql = "INSERT INTO itens(nome,tipo,quantidade,preco) VALUES ('$nome','$select','$quant','$valor')";
                         $mysqli->query($querySql) or die($mysqli->error . "ERRO AO CRIAR PRODUTO");
                         $_POST['nome'] = '';
                         $_POST['tipo'] = '';
                         $_POST['quant'] = '';
                         $_POST['valor'] = '';
               ?>
               <h3>Enviado Com Sucesso</h3>
               <?php
                    }else{
                         echo "<script>alert('Não Pode Existir Campos Vazios')</script>";
                    }
               ?>
          </form>
     </div>
</body>
</html>