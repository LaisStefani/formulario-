<?
/*
        phpX Logon Using v1.1
     Desenvolvido por:    Milton Teles Filho
     Data da vers�o:      15/01/2006
     N�mero da vers�o:    001
     Vers�o:              1.1
     Desenvolvido em Po�os de Caldas, MG
     http://www.phpx.com.br/

     logado.php
*/
 include("privado.php"); ?>
Esta � a p�gina que voc� est� logado: <?=$_SESSION['login'];?>

Para sair clique <a href="<?=$url?>/logout.php">aqui</a>.
