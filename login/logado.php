<?
/*
        phpX Logon Using v1.1
     Desenvolvido por:    Milton Teles Filho
     Data da versão:      15/01/2006
     Número da versão:    001
     Versão:              1.1
     Desenvolvido em Poços de Caldas, MG
     http://www.phpx.com.br/

     logado.php
*/
 include("privado.php"); ?>
Esta é a página que você está logado: <?=$_SESSION['login'];?>

Para sair clique <a href="<?=$url?>/logout.php">aqui</a>.
