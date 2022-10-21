<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    
<?php
 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $senha = $_POST['senha'];

 // driver de conexão com o Banco de Dados
 $strcon = mysqli_connect('localhost','root','','login');

 // Se a variável !$strcon retornar false
 if (!$strcon) {
   die('Não foi possível conectar ao MySQL');
 }

 // Criando a declaração SQL:
 $sql = "INSERT INTO usuarios(nome, email, senha)
 VALUES ('$nome','$email','$senha')";

 // Executando a declaração no banco de dados:
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao executar a inserção dos dados");
 echo "Registro inserido com sucesso";
 mysqli_close($strcon);
 
 echo "<br><br><a href='cadastro.html'>Voltar à página inicial</a>";
?>

</body>
</html>