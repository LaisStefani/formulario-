<?
/*
        phpX Logon Using v1.1
     Desenvolvido por:    Milton Teles Filho
     Data da vers�o:      15/01/2006
     N�mero da vers�o:    001
     Vers�o:              1.1
     Desenvolvido em Po�os de Caldas, MG
     http://www.phpx.com.br/

     login.php
*/
include("./config.php");
$l = $_POST['l'];
$s = $_POST['s'];
$s = md5(md5(md5(md5($s))));

$sql = mysql_query("SELECT * FROM usuarios WHERE login='$l' AND senha='$s'");
$cnt = @mysql_num_rows($sql);
if($cnt >= 1){
  $_SESSION['login'] = $l;
  header("Location: ".$url."/".$pgsc);
} else {
  header("Location: ".$url."/index.php?erro=Login ou senha incorretos");
}
echo $cprg;
?>
