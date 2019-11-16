<?
session_start();
/*
        phpX Logon Using v1.1
     Desenvolvido por:    Milton Teles Filho
     Data da versão:      15/01/2006
     Número da versão:    001
     Versão:              1.1
     Desenvolvido em Poços de Caldas, MG
     http://www.phpx.com.br/
     
     config.php
*/

//Dados para conexão com o MySQL
$host    = "localhost";                   //Servidor
$user    = "root";                        //Usuário
$pass    = "";                            //Senha
$bd      = "";                            //Base de Dados

//Não mexa!!!
mysql_connect($host, $user, $pass);
mysql_select_db($bd);

//Configuração
$site    = "phpX";                        //Nome do site
$url     = "http://phpx.com.br/logusi";   //Pasta onde está o script sem "/" no final
$pger    = "proibido.php";              //Página que receberá os redirecionamentos de páginas restritas se não logadas
$pgsc    = "logado.php";                //Página que receberá o redirecionamento quando logado
$cprg    = "<font size=2>phpX Login Using 1.1 ©2005-2006</font>"; //Não remova
?>
