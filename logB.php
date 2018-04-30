<!DOCTYPE html>
<htmL>
<head>
	<script language="JavaScript">
		function validar(){
			alert("Login e senha inválidos. Confira os dados e digite novamente!")
		}
</script>
</head>
<body>
<?php
	//entradas genéricas
	$log = $_POST['log'];
	$key = $_POST['key'];
	
	if ($log == "admin" && $key == "123"){
		include ("principal.php");
	}else{
		echo ("<script>validar()</script>");
		include ("cadastro.php");
	}
?>
</body>
</html>