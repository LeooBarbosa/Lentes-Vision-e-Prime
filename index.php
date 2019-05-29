<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
    <title>Lentes</title>
</head>
<body>
<div class="cabecalho-pag">
        <h1 class="pag-titulo">Coleta de informações</h1>
    </div>
<div class="informar-cliente">
            <h3 class="informar-conteudo">Informamos que,</h3>
            <p>de acordo com os parâmetros passados, logo abaixo é o resultado</p>
        </div>
    <div id="main">
        <section class="resultado-calculo">
            <div class="main">
        
        <?php
            $grauA = isset($_GET["grauA"])?$_GET["grauA"]:null;
            echo "<p class='resultado'>Valor 1 digitado: $grauA</p>";
            $grauB = isset($_GET["grauB"])?$_GET["grauB"]:null;
            echo "<p class='resultado'>Valor 2 digitado: $grauB</p>";
            $grauC = isset($_GET["grauC"])?$_GET["grauC"]:null;
            echo "<p class='resultado'>Valor 3 digitado: $grauC</p>";
            $grauD = isset($_GET["grauD"])?$_GET["grauD"]:null;
            echo "<p class='resultado'>Valor 4 digitado: $grauD</p>";
            $tipoLente;
            $tipoLenteDois;
            // Lente Prime
            if($grauA == null and $grauB == null){
                $tipoLente = null;
                echo "<p class='mensagem'>Nos falta informação para determinar a lente!</p>";
            }
            elseif($grauC <= 0 and $grauC >= -2 && $grauD <= 0 and $grauD >= -2){
                if($grauA <= -3 and $grauA >= -12 && $grauB <= -3 and $grauB >= -12){
                    $tipoLente = "Lente Prime (1) é a melhor pra você!";
                    if($grauC < -2 and $grauC >=-5 && $grauD < -2 and $grauD){
                        if($grauA <= -3 and $grauA >= -10 && $grauB <= -3 and $grauB >= -10){
                            $tipoLente = "Lente Prime (2) é a melhor pra você!";
                        }
                    }
                    echo "<p class='mensagem'>$tipoLente";
                } else {
                            // echo "$tipoLente";
                    echo "<p class='mensagem'>Valores não satisfazem nossos modelos</p>";
                }
            } elseif($grauA <= 0 and $grauA >= -15 && $grauB <= 0 and $grauB >= -15) {
                    if($grauC <= -2 and $grauC >=-5 && $grauD <= -2 and $grauD >= -5){
                    $tipoLenteDois = "Lente Vision é a ideal pra você!";
                    echo "<p class='mensagem'>$tipoLenteDois</p>";
                } else {
                    echo "<p class='mensagem'>Valor de grau cilíndrico não suportado</p>";
                }
                
            } else {
                $tipoLente = null;
                echo "<p class='mensagem'>Valores nao suportados</p>";
            }
                ?>
                </div>
                <a href="index.html">Voltar</a>
        </section>
      
    </footer>
    </body>
    </div>
</html>
                