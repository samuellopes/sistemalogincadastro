<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
  </head>
  <body>
  <?php
    // Conectando ao banco de dados: 
    //include_once("conectar.php");

    // driver de conexão com o Banco de Dados
    $strcon = mysqli_connect('localhost','root','','login');

    // Criando tabela e cabeçalho de dados:
    echo "<table border=1>";
    echo "<tr>";
    echo "<th>NOME</th>";
    echo "<th>EMAIL</th>";
    echo "<th>SENHA</th>";
    echo "</tr>";
  
    // Selecionei todos os usuários da tabela usuarios
    $sql = "SELECT * FROM usuarios";

    // Armazenei o resultado da mysqli_query em $resultado
    $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");
    
    // Obtendo os dados por meio de um loop while
    while ($registro = mysqli_fetch_array($resultado)){
    $nome = $registro['nome'];
    $email = $registro['email'];
    $senha = $registro['senha'];
    echo "<tr>";
    echo "<td>".$nome."</td>";
    echo "<td>".$email."</td>";
    echo "<td>".$senha."</td>";
    echo "</tr>";
    }

    // Fechar a conexão
    mysqli_close($strcon);
    echo "</table>";
    echo "<br>";
    echo "<br>";
    echo "<br><br><a href='cadastro.html'>Voltar à página inicial</a>";
    ?>
  </body>
</html>