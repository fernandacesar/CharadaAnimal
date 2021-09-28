<?php
$perguntas = array(
    "Têm corpos musculosos com membros anteriores poderosos, grandes cabeças, caudas longas e garras enormes. A pelagem é densa e pesada; a coloração varia entre tons de laranja e marrom com áreas ventrais brancas e listras pretas verticais distintas, cujos padrões são únicos para cada indivíduo.",
    "É um mamífero com dentes afiados, excelente faro e boa audição. Têm diferentes tamanhos, formas e cores. Existem mais de quatrocentas raças",
    "É um mamífero evoluído do javali selvagem. Ele é um animal onívoro e digere bem todos os alimentos. Possui patas curtas com quatro dedos cada uma e com cascos. Possui 44 dentes e seu focinho é feito de cartilagem.",
    "É um mamífero aquático da ordem Cetacea (mesma das baleias) e da família Delphinidae. Esta é a maior família da ordem, com 37 espécies conhecidas, vivendo perfeitamente adaptadas às águas. Podem atingir 40 km/h em seu nado e saltar até 5 metros para fora da água, pois são acrobatas.",
    "É um animal que apresenta um padrão de pelagem bastante característico, sendo esses reconhecidos facilmente a partir de seus pelos brancos e manchas negras ao redor dos olhos, orelhas, membros e ombros. Esses animais pesam entre 75 e 160 quilos e podem atingir mais de 1,20 m de altura."
);
$respostas = array(
    "Tigre",
    "Cachorro",
    "Porco",
    "Golfinho",
    "Panda"
);
$pos = 0;
$mensagem = " ";

function sortear_Card($size)
{
    return rand(0, $size - 1);
}


if (isset($_POST["bt_reset"])) {
    $pos = sortear_Card(5);
}

if (isset($_POST["pos"])) {
    $pos = $_POST["pos"];
    $resposta = $respostas[$pos];

    if ($resposta ==  $_POST["resposta"]) {
        $mensagem =  "<h4 style= 'text-transform: uppercase;'  id='validacao' > PARABÉNS, VOCÊ ACERTOU O NOME, ESSE É O ".$resposta."</h4>";
        

    } else {
        $mensagem =  "<H4 id='validacao' > OPA, OPA ESSE NÃO É O NOME DO ANIMAL! TENTE DE NOVO! </H4>";

    }
} 

else {
    $pos = sortear_Card(5);
}


?>
<!DOCTYPE html>

<html lang="pt">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CHARADA ANIMAL </title>
    <link rel="stylesheet" href="style.php" type="text/css" />

</head>

<body>
    <div id="topo">
        <img src="img/Beah.png">
        <h2> VOCÊ SABE O NOME DOS ANIMAIS?</h2> <br>
    </div>
    <div id="question">
        <h3> O QUE É O QUE É: <br></h3>
        <h4> <?php echo $perguntas[$pos]; ?> </h4>
        </div>
        <form method='post' action='#' id="">
            <input type="text" name="resposta" id="label_q">
            <input type="hidden" name="pos" value="<?php echo $pos; ?>" id= "">
            <input type="submit" nome="btResponder" value="Responder" id="bt_resp"> 
        </form>
   
    <form method="post" action="#">
        <input type="image" nome="bt_Reset" value=" " src="img/reload.png" id="bt_mudar"> <br> <br>
    </form>
    <?php echo $mensagem; ?>

</body>

</html>
