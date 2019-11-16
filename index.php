<?php 
    session_start([
    'cookie_lifetime' => 1800,
    ]);
    if(!isset($_SESSION['usuario'])){
        Header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Formulário</title>
		<meta charset="UTF-8">
        <meta name="author" content="Lais">
        <link rel="icon" href="imagens/guia.jpg">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <script type="js/ie-emulation-modes-warning.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
    </head>
 
	<body class="fundo">
        <div class="container">
            <FORM name="exibir.php" action="exibir.php" method="POST">
                <div class="col-md-11 mb-4">
                    <div class="quadro">
                        <img class="mg" src="imagens/guia.jpg"><br>
                        <h3>Formulário Web</h3>
                        <label for="nome">Nome:</label>
                        <input type="nome" class="form-control" id="nome" placeholder="Nome" name="nome" required autofocus>
                        <label for="dt_nascimento">Data de Nascimento:</label>
                        <input type="Date" class="form-control" id="dt_nascimento" placeholder="Data de nascimento" name="dt_nascimento" required autofocus>
    
                        <label for="frmCEP">CEP</label>
                        <input class="form-control" type="tel" name="cep" id="frmCep" tabindex="1" data-mask="00000-000" placeholder="00000-000" />
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#modalBuscaCEP">Não sei meu CEP</button><br>
                        <label for="frmLogradouro">Logradouro</label>
                        <input class="form-control" type="text" name="logradouro" id="frmLogradouro" tabindex="2" readonly />
                        <label for="numero">Número:</label>
                        <input type="numero" class="form-control" id="numero" placeholder="Número" name="numero"  required autofocus>
                        <label for="frmLogradouro">Complemento</label>
                        <input class="form-control" type="text" name="complemento" id="frmComplemento" placeholder="Complemento"/>
                        <label for="frmLogradouro">Bairro</label>
                        <input class="form-control" type="text" name="bairro" id="frmBairro" readonly />
                        <label for="frmLogradouro">Localidade</label>
                        <input class="form-control" type="text" name="localidade" id="frmLocalidade" readonly />

                        <label for="telefone">Telefone:</label>
                        <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="(00) 0000-0000" maxlength="14" data-mask="(00) 0000-0000">
                        <label for="txt_celular">Celular:</label>
                        <input type="tel" class="form-control" name="celular" id="celular" placeholder="(00) 00000-0000" maxlength="15" required autofocus data-mask="(00) 00000-0000">
                        <br>
                        <div class="text-right">
                        	<a href="relatorio.php"> <input class="btn btn-dark botao" type="button" value="Relatório"></a>
                        	<input class="btn btn-dark botao" type="submit" value="Enviar">
                    	</div>

                        <div class="modal fade" id="modalBuscaCEP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Busque seu CEP</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="frmBuscaLogradouro">Logradouro</label>
                                            <input class="form-control" type="text" id="frmBuscaLogradouro" placeholder="Logradouro" />
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label for="frmCidade">Cidade</label>
                                                <input class="form-control" type="text" id="frmBuscaCidade" placeholder="Cidade"/>
                                            </div>
                                            <div class="form-group col">
                                                <label for="frmEstado">Estado</label>
                                                <select class="form-control" id="frmBuscaEstado">
                                                    <option value="AC">Acre</option>
                                                    <option value="AL">Alagoas</option>
                                                    <option value="AP">Amapá</option>
                                                    <option value="AM">Amazonas</option>
                                                    <option value="BA">Bahia</option>
                                                    <option value="CE">Ceará</option>
                                                    <option value="DF">Distrito Federal</option>
                                                    <option value="ES">Espírito Santo</option>
                                                    <option value="GO">Goiás</option>
                                                    <option value="MA">Maranhão</option>
                                                    <option value="MT">Mato Grosso</option>
                                                    <option value="MS">Mato Grosso do Sul</option>
                                                    <option value="MG">Minas Gerais</option>
                                                    <option value="PA">Pará</option>
                                                    <option value="PB">Paraíba</option>
                                                    <option value="PR">Paraná</option>
                                                    <option value="PE">Pernambuco</option>
                                                    <option value="PI">Piauí</option>
                                                    <option value="RJ">Rio de Janeiro</option>
                                                    <option value="RN">Rio Grande do Norte</option>
                                                    <option value="RS">Rio Grande do Sul</option>
                                                    <option value="RO">Rondônia</option>
                                                    <option value="RR">Roraima</option>
                                                    <option value="SC">Santa Catarina</option>
                                                    <option value="SP" selected>São Paulo</option>
                                                    <option value="SE">Sergipe</option>
                                                    <option value="TO">Tocantins</option>
                                                </select>
                                            </div>
                                        </div><!-- /form-row -->

                                        <div class="text-center">
                                            <input class="btn btn-outline-dark" id="frmBuscarCEP" value="BUSCAR CEP"></INPUT>
                                        </div>
                                    </div><!-- /modal-body -->

                                    <div class="modal-list">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Logradouro</th>
                                                        <th scope="col">Bairro</th>
                                                        <th scope="col">CEP</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="listaBuscaCEP"></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </FORM>
        </div>

        <script src="js/bootstrap.min.js"></script>

        <script type="text/javascript">
            var enderecos = [];

            $("#frmCep").on("blur", function () {
                if ($("#frmCep").val().length >= 8) {

                    var cep = $("#frmCep").val().replace(/\D/g, '');

                    var validacep = /^[0-9]{8}$/;

                    if (cep != "") {

                        //Expressão regular para validar o CEP.
                        var validacep = /^[0-9]{8}$/;

                        //Valida o formato do CEP.
                        if (validacep.test(cep)) {

                            //Preenche os campos com "..." enquanto consulta webservice.
                            $('#frmLogradouro').val("...");
                            $('#frmComplemento').val("...");
                            $('#frmBairro').val("...");
                            $('#frmLocalidade').val("...");
                            $('#frmUF').val("...");

                            //Consulta o webservice viacep.com.br/
                            $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                                if (!("erro" in dados)) {
                                    //Atualiza os campos com os valores da consulta.
                                    $('#frmLogradouro').val(dados.logradouro);
                                    $('#frmComplemento').val(dados.complemento);
                                    $('#frmBairro').val(dados.bairro);
                                    $('#frmLocalidade').val(dados.localidade);
                                    $('#frmUF').val(dados.uf);
                                } //end if.
                                else {
                                    //CEP pesquisado não foi encontrado.
                                    limpa_formulário_cep();
                                    alert("CEP não encontrado.");
                                }
                            });
                        } //end if.
                        else {
                            //cep é inválido.
                            limpa_formulário_cep();
                            alert("Formato de CEP inválido.");
                        }
                    } //end if.
                    else {
                        //cep sem valor, limpa formulário.
                        limpa_formulário_cep();
                    }

                } else {
                    console.log($("#frmCep").val().length);
                }
            });

            $("#frmBuscarCEP").on("click", function () {
                var modal = $("#modalBuscaCEP");
                modal.find("#listaBuscaCEP").html("");

                var logradouro = $("#frmBuscaLogradouro").val();
                var cidade = $("#frmBuscaCidade").val();
                var estado = $("#frmBuscaEstado").val();

                $.ajax({
                    url: "https://viacep.com.br/ws/" + estado + "/" + cidade + "/" + logradouro + "/json/",
                    beforeSend: function () {
                        modal.find("#listaBuscaCEP").html('<tr><th class="text-center" colspan="3"><i class="fas fa-circle-notch fa-spin fa-3x"></i> <br /> <b>Carregando dados</b></th></tr>');
                    },
                    success: function (dados) {
                        modal.find("#listaBuscaCEP").html('');
                        for (i = 0; i < dados.length; i++) {

                            if (dados[i].complemento != "") {
                                var logradouro = dados[i].logradouro + " - " + dados[i].complemento;
                            } else {
                                var logradouro = dados[i].logradouro;
                            }

                            enderecos[i] = [
                                dados[i].cep,
                                dados[i].logradouro,
                                dados[i].complemento,
                                dados[i].bairro,
                                dados[i].localidade,
                                dados[i].uf
                            ]
                            modal.find("#listaBuscaCEP").append('<tr onclick="recuperaDados(' + i + ')"><th>' + logradouro + '</th><td>' + dados[i].bairro + '</td><td>' + dados[i].cep + '</td></tr>');
                        }
                    }
                });
            });

            function recuperaDados(identificador) {
                $('#frmCep').val(enderecos[identificador][0]);
                $('#frmLogradouro').val(enderecos[identificador][1]);
                $('#frmComplemento').val(enderecos[identificador][2]);
                $('#frmBairro').val(enderecos[identificador][3]);
                $('#frmLocalidade').val(enderecos[identificador][4]);
                $('#frmUF').val(enderecos[identificador][5]);
                $("#modalBuscaCEP").modal('hide');
            }

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $('#frmLogradouro').val("");
                $('#frmComplemento').val("");
                $('#frmBairro').val("");
                $('#frmLocalidade').val("");
                $('#frmUF').val("");
            }

        </script>
        <footer class="rodape">
             <p>######## <br> Copyright © 2018.</p>
        </footer>  
        <script type="text/javascript" src="js/jquery.mask.min.js"></script>
        <script type="js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>


 