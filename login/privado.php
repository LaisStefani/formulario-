<?
/*
        phpX Logon Using v1.1
     Desenvolvido por:    Milton Teles Filho
     Data da vers�o:      15/01/2006
     N�mero da vers�o:    001
     Vers�o:              1.1
     Desenvolvido em Po�os de Caldas, MG
     http://www.phpx.com.br/

     cprivado.php
*/
include("config.php");
if(!empty($_SESSION['login'])){}else{
header("Location: ".$url."/".$pger);
}
?>
