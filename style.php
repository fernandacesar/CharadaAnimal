<?php
// Define que o arquivo terá a codificação de saída no formato CSS
header("Content-type: text/css");

$cor_fundo = '#62d158';
$cor_texto = '#ffffff';
$cor_texto2 = '#0b3008';
$cor_texto3 = '#1a2413';


?>



body {
    background: <?php echo $cor_fundo; ?>;
}

#topo{
    color: <?php echo $cor_texto; ?>;
    text-align: center;
    font-family: 'Prompt', sans-serif;
}

h2 {
    color: <?php echo $cor_texto; ?>;
    font-family: Verdana, Arial, serif;
    text-align: center;
    text-shadow: #0b3008 2px 3px 2px;
}

h3 {
    color: <?php echo $cor_texto2; ?>;
    font-family: Verdana, Arial, serif;
    text-align: center;
    text-shadow: #cfffd3 2px 3px 2px;
}

h4{
    color: <?php echo $cor_texto3; ?>;
    font-family: Verdana, Arial, serif;
    text-align: justify;
}

img{
    height: 350px;
}

#question{
    max-width: 600px;
    text-align: center;
    align="center";
    position: absolute;
    left: 30%;

    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    border-color: #6d4a3cda;

    padding: 12px;
    background-color: #ffffff;
}

#label_q{
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    border-color: #008037;
    background-color: #c9ffc4;
    color: #183615;
    max-width: 600px;
    position: fixed;
    left: 40%;
    bottom: 30px;
}


#bt_resp{
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    border-color: #c9ffc4;
    background-color: #008037;
    color: #ffffff;
    max-width: 600px;
    position: fixed;
    left: 55%;
    bottom: 30px;
}

#bt_mudar{
    position: fixed;
    width: 40px;
    height:40px;
    left: 30%;
    top: 20px;
    background-color:#C9E265;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    border-color: #FFFFFF;
    border-style: solid;
    padding: 8px;
}
 <!-- PAG INDEX -->
#label_q2{
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    border-color: #008037;
    background-color: #c9ffc4;
    color: #183615;
    max-width: 600px;
    position: fixed;
    left: 40%;
    bottom: 50px;
}

#validacao{
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    border-color: #008037;
    background-color: #1e522c;
    text-align: center;
    max-width: 300px;
    position: fixed;
    color: #ffffff;
    left: 20%;
    bottom: 250px;
}