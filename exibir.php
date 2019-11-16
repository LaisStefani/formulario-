<!DOCTYPE html>
  <html lang="pt-br">
    <head>
      <title>Formulário</title>
      <meta charset="UTF-8">
      <link rel="icon" href="imagens/guia.jpg">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="css/estilos.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <META HTTP-EQUIV=Refresh CONTENT="4; URL=index.php">
    </head>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">Formulário</a>
    </nav>

    <?php
      $servidor='localhost'; 
      $banco='test';
      $usuario='root';
      $senha='';
      // Verifica se algo foi postado
      if ( ! empty( $_POST )) {
          // Variáveis
        $nome = $_POST ['nome']; 
        $dt_nascimento = $_POST ['dt_nascimento']; 
        $cep = $_POST ['cep'];
        $logradouro = $_POST ['logradouro'];
        $numero = $_POST ['numero'];
        $complemento = $_POST ['complemento'];
        $bairro = $_POST ['bairro'];
        $cidade = $_POST ['localidade'];
        $telefone = $_POST ['telefone'];
        $celular = $_POST ['celular'];

        $link = mysqli_connect ("localhost","root","", "test") or die ("Erro na conexão");
        date_default_timezone_set('America/Sao_Paulo');

        $horario = date('d-m-Y H:i:s', time());
          // Base de dados
        $query = "INSERT INTO formulario (nome, dt_nascimento, cep, logradouro, numero, complemento, bairro, cidade, telefone,celular, data_hora) VALUES ('$nome','$dt_nascimento', '$cep', '$logradouro', '$numero', '$complemento', '$bairro', '$cidade', '$telefone', '$celular', '$horario')";
        mysqli_query($link,$query);
        mysqli_close($link);
          // Mensagem que aparecerá no navegador.
      }else{  
          // Caso houver erros a mensagem abaixo aparecerá no navegador.
        header('Location: index.php');
      };  
    ?>

    <body class="fundo">
        <div class="container">
      <div class="quadro">
        <ul class="list-group">
          <li class="list-group-item">Nome:  <?= $nome?></li> 
          <li class="list-group-item">Data de Nascimento: <?= date('d-m-Y', strtotime($dt_nascimento)); ?></li>
          <li class="list-group-item">CEP: <?= $cep?></li>
          <li class="list-group-item">Logradouro:  <?= $logradouro?></li>
          <li class="list-group-item">Número:  <?= $numero?></li>
          <li class="list-group-item">Complemtento: <?= $complemento?></li>
          <li class="list-group-item">Bairro: <?= $bairro ?></li>
          <li class="list-group-item">Cidade: <?= $cidade ?></li>
          <li class="list-group-item">Telefone: <?= $telefone ?></li>
          <li class="list-group-item">Celular: <?= $celular ?></li>
          <li class="list-group-item">Data do formulário: <?= $horario ?>
          </li>
        </ul>
      </div> 
    </body>
  <br>
</html>