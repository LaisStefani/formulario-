<?
session_start();
/*
        phpX Logon Using v1.1
     Desenvolvido por:    Milton Teles Filho
     Data da vers�o:      15/01/2006
     N�mero da vers�o:    001
     Vers�o:              1.1
     Desenvolvido em Po�os de Caldas, MG
     http://www.phpx.com.br/
     
     config.php
*/

//Dados para conex�o com o MySQL
$host    = "localhost";                   //Servidor
$user    = "root";                        //Usu�rio
$pass    = "";                            //Senha
$bd      = "";                            //Base de Dados

//N�o mexa!!!
mysql_connect($host, $user, $pass);
mysql_select_db($bd);

//Configura��o
$site    = "phpX";                        //Nome do site
$url     = "http://phpx.com.br/logusi";   //Pasta onde est� o script sem "/" no final
$pger    = "proibido.php";              //P�gina que receber� os redirecionamentos de p�ginas restritas se n�o logadas
$pgsc    = "logado.php";                //P�gina que receber� o redirecionamento quando logado
$cprg    = "<font size=2>phpX Login Using 1.1 �2005-2006</font>"; //N�o remova
?>
