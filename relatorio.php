<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Relatório</title>
        <meta charset="UTF-8">
        <link rel="icon" href="imagens/guia.jpg">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/bootstrap-table.min.css">

        <script src="js/jquery.min.js"></script>

    </head>

    <body class="fundo">
        <nav class="navbar navbar-inverse navbar-static-top">
            <a class="navbar-brand" href="index.php">Voltar</a>
        </nav>
      

        <div class="quadro">
            <div class="page-header">
                <h3>Relatório</h3>

                <table
                    data-toggle="table"
                    data-height="420"
                    data-search="true"
                    accesskey=""
                    select="true"
                    data-side-pagination="client"
                    data-pagination="true"
                    data-pagination-first-text="First"
                    data-page-list="[10, 15, 50, 100]"
                    data-show-export="true"
                    data-url="conexao.php">
                    <thead>
                        <tr>                            
                            <th data-field='id' class="col text-left">ID</th> 
                            <th data-field='nome' class="col text-left">Nome</th> 
                            <th data-field='dt_nascimento' class="col text-left">Nascimento</th>
                            <th data-field='logradouro' class="col text-left">Logradouro</th> 
                            <th data-field='cep' class="col text-left">CEP</th> 
                            <th data-field='numero' class="col text-left">Número</th> 
                            <th data-field='complemento' class="col text-left">Complemento</th> 
                            <th data-field='bairro' class="col text-left">Bairro</th> 
                            <th data-field='cidade' class="col text-left">Cidade</th> 
                            <th data-field='telefone' class="col text-left">Telefone</th>
                            <th data-field='celular' class="col text-left">Celular</th>
                            <th data-field='data_hora' class="col text-left">Gravação</th> 
                        </tr>
                    </thead>            
                </table>


            </div>
        </div> 

        <script src="js/bootstrap3.min.js"></script>
        <script src="js/bootstrap-table.min.js"></script>
        <script src="js/bootstrap-table-pt-BR.min.js"></script>
        <script src="js/extensions/export/bootstrap-table-export.min.js"></script>
        <script src="js/tableExport.js"></script>
        

        <script>
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>

    </body>
</html>
