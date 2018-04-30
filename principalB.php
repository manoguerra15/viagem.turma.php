<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$cidade=$_POST['cidades'];
	$veiculo=$_POST['veiculos'];
	$hotel=$_POST['estrela'];
	$diaria=$_POST['diaria'];
	$translado=$_POST['trans'];
	$texto=$_POST['roteiro'];
	//$estrela=$_POST['estrela'];
	//echo $cidade,$veiculo,$estrela;
	switch ($cidade){//as variaveis recebem os valores dos inputs e retornam seus nomes e pesos de calculo.
		case '1':
			$cidadeC='São Paulo';$cidadep=2;
			break;
		case '2':
			$cidadeC='Rio de janeiro';$cidadep=3;
			break;
		case '3':
			$cidadeC='Salvador';$cidadep=1.5;
			break;

			default:null;break;}

	switch ($veiculo) {//as variaveis recebem os valores dos inputs e retornam seus nomes e valores de calculo.
			case '1':
				$veiculoC='Avião';$veiculop=800;
				break;
			case '2':
				$veiculoC='Navio';$veiculop=550;
				break;
			case '3':
				$veiculoC='Trem';$veiculop=300;
				break;
			case '4':
				$veiculoC='Ônibus';$veiculop=180;
				break;
			default:
				null;
				break;
				default:null;break;}
		
	switch ($hotel){
			case '1':
				$hotp=1.2;
				break;
			case '2':
				$hotp=1.5;
				break;
			case '3':
				$hotp=1.8;
				break;
			case '4':
				$hotp=2.1;
				break;
			case '5':
				$hotp=2.5;
				break;
				default:null;break;}
	
	switch ($translado) {
		case '1':
			$valtrans=150;
			break;
		case '2':
			$valtrans=null;
			break;
		
		default:null;break;
	}
	$arq="rj.txt";
	$open =fopen($arq,'r');
while(! feof($open)){
	$conteudo =fgets($open,500); print $conteudo;}
	 fclose($open);
	






	//calculo de valores:
	//o peso de valor da cidade x peso base padrão(50) x peso do hotel x quantidade de dias:
	$valdiaria=(($cidadep*50)*$hotp)*$diaria;
	$valtotal= $cidadep*($veiculop+$hotval+$valtrans+$valdiaria);
	echo '------------------------------------------';echo'<br/>';
	echo $cidadeC;echo'<br/>';
	echo $veiculoC;echo'<br/>';
	echo $hotel;echo'<br/>';
	echo $valtotal;echo'<br/>';
	echo $diaria;echo'<br/>';
	echo $texto;

		?>
</body>
</html>