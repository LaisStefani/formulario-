<?
/*
        phpX Logon Using v1.1
     Desenvolvido por:    Milton Teles Filho
     Data da versão:      15/01/2006
     Número da versão:    001
     Versão:              1.1
     Desenvolvido em Poços de Caldas, MG
     http://www.phpx.com.br/

     reg.php
*/
include("config.php");
if($aco){
$sql = mysql_query("SELECT * FROM usuarios WHERE login='$l' OR mail='$m'");
$cnt = @mysql_num_rows($sql);
if($cnt <= 0){
  $s = md5(md5(md5(md5($_POST[s]))));
  $a=mysql_query("INSERT INTO usuarios(nome, mail, login, senha) VALUES('$_POST[n]','$_POST[m]','$_POST[l]','$s')");
  if($a){
    echo "<a href=$url/index.php>Logar</a>";
    exit;
  }
} else {
  echo "Este usuário ou endereço de e-mail já está registrado em nosso banco de dados!<BR>";
}
}
?>

<form method="POST" action="?aco=reg">
Nome: <input type="text" size="20" name=n><BR>
E-Mail: <input type="text" size="20" name=m><BR>
Login: <input type="text" size="20" name=l><BR>
Senha: <input type="password" size="20" name=s><BR>
<input type="submit" value="Cadastrar">
</form>
