<!DOCTYPE html>
<html lang="pt-br">
<head>

    <title>Utravel-Nós levamos você</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style type="text/css">
        body{background-color:gray;}
        #image{
            border-radius:50px;
            height:80px;width:80px;top:5%;left:0.5%;
            height:80px;width:80px;top:5%;left:0.5%;
            height:80px;width:80px;top:5%;left:0.5%;
            position:absolute;
        }
        #nome{ font-size:25px;left:8%;top:6%;position:fixed;

        }
        #ancora{position:fixed;font-size:20px;text-decoration:none;
            font-color:black;left:28%;top:10%;

        }
        #top{
            width:100%;
            height:14%;
            background-color:lightgrey;
            position:absolute;
            top:0;left:0;margin:0;
        }
        #logo{
            text-align:center;font-size:20px;font-family:helvetica;}
        #corpo{
            width:80%;
            height:80%;
            background-color:white;position:fixed;
            top:16%;
            left:10%;
            border-style:solid;
            border-radius:8px;
            border-color:white;
        }
        #area{}
        #painel{
            width:45%;height:77%;top:18%;left:44%;
            background-color:#f0f0f0;position:inherit;border-radius:5px;

        }
        p[type="radio"]{display:block;float:left;}

    </style></head><body>
<div id="top">
    <p id="logo">Utravel Nós levamos você!</p>
    <img id="image" src="images/logo.png"></div>
<p id="nome"> Seja bem vindo:......</p>
<p><a id="ancora" href="perfil.html">Ver Perfil</a><a href="registros.php">Ver Registros</a></p>
<div id="corpo">
    <p>OPÇÕES DE VIAGENS</p>
    <?php
    // Abre o Arquvio no Modo r (para leitura)
    $arquivo = fopen ('teste.txt', 'r');

    // Lê o conteúdo do arquivo
    if(!feof($arquivo))
    {
        //Mostra uma linha do arquivo
        $linhas = explode("/", file_get_contents('teste.txt'));


    }

?>
    <form action="principal.php" method="POST">

        <p>Destino:
            <select name="cidades">
                <option value="1"><?php echo "$linhas[0]"?></option>
                <option value="2"> <?php echo "$linhas[1]"?></option>
                <option value="3"> <?php echo"$linhas[2]"?></option>
            </select></p>

        <p>Transporte:
            <select name="veiculos">
                <option value="1"><?php echo "$linhas[3]"?></option>
                <option value="2"><?php echo "$linhas[4]"?></option>
                <option value="3"><?php echo "$linhas[5]"?></option>
                <option value="4"><?php echo "$linhas[6]"?></option>
            </select></p>


        <p><label>Qualidade Hotel:</label>
            <input  type="radio" id="o1" name="estrela" value="1"><?php echo "$linhas[7]"?>
            <input  type="radio" id="o2" name="estrela" value="2"><?php echo "$linhas[8]"?>
            <input  type="radio" id="o3" name="estrela" value="3"><?php echo "$linhas[9]"?>
            <input  type="radio" id="o4" name="estrela" value="4"><?php echo "$linhas[10]"?>
            <input  type="radio" id="o5" name="estrela" value="5"><?php echo "$linhas[11]"?></p>

        <p><?php echo "$linhas[12]"?><input type="text" size="1" maxlength="2" name="diaria"></p>
        <p><?php echo "$linhas[13]"?><input type="radio" name="trans" value="1">sim <input type="radio" name="trans" value="2">não</p>

        <p><textarea name="roteiro" id="area" cols="50" rows="8" placeholder="Digite aqui o seu roteiro de viagem!"></textarea></p>
        <p><input type="submit" name="enviar" value="Registrar""><a href="viagens.html"></a></p>
        <p><a href="sonhos.html" style="font-size:20px;">Envie-nos a sua "Viagem dos sonhos!"</a></p>

</form>

    <div id="painel">
        <img src="images/mala.jpg" style="width:100%;height:100%;border-radius:5px;">
    </div></div>

</body>
 </html>
