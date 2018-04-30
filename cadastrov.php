<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
$nome=$_POST['nome'];
$snome=$_POST['snome'];
$dia_nasc=$_POST['dia_nasc'];
$mes_nasc=$_POST['mes_nasc'];
$ano_nasc=$_POST['ano_nasc'];
$rg=$_POST['rg'];
$cpf=$_POST['cpf'];
$login=$_POST['login'];
$senha=$_POST['senha'];
$rua=$_POST['rua'];
$cep=$_POST['cep'];
$num=$_POST['num'];
$file=$_POST['file'];
$ok=$_POST['ok'];

$form = "$nome,$snome,$dia_nasc,$mes_nasc,$ano_nasc,$rg,$cpf,$login,$senha,$rua,$rua,$cep,$num,$file";

$arq="cadastro.txt";//add contador







<div id="pgravar" class="central">

//PEGA OS DADOS ENVIADOS PELO FORMULÁRIO 
$mensagem = $_POST["$nome,$snome,$dia_nasc,$mes_nasc,$ano_nasc,$rg,$cpf,$login,$senha,$rua,$rua,$cep,$num,$file"]; 

//PREPARA O CONTEÚDO A SER GRAVADO 
$conteudo = "$mensagem\r\n"; 

//ARQUIVO TXT 
$arquivo = "msg.txt"; 

//TENTA ABRIR O ARQUIVO TXT 
if (!$abrir = fopen($arquivo, "w+")) { 
echo "Erro abrindo arquivo ($arquivo)"; 
exit; 
} 

//ESCREVE NO ARQUIVO TXT 
if (!fwrite($abrir, $conteudo)) { 
print "Erro escrevendo no arquivo ($arquivo)"; 
exit; 
} 

echo "Arquivo gravado com Sucesso !!<p></p>";
 

//FECHA O ARQUIVO  
fclose($abrir);  
?>

<form style="text-align:center">
<input type="button" value="Voltar" onClick="JavaScript: window.history.back();">
</form>
</div>
</body>
</html>