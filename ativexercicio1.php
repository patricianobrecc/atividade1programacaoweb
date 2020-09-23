<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Programação WEB - SPI</title>
    </head>
    <body>
        <p>
            <?php
            // exemplo de valor digitado pelo usuario //
            $segundos = 100000;
            echo ("Você digitou <strong> $segundos segundos</strong>, vamos converter! <br/>");
            // transformando o valor digitado em minuto //
            $minutos = $segundos / 60;
            /* dizendo ao usuario quandoS minutos ele tem 
            em relação valor digitado */
            echo ("Você tem um total de <strong>" . $minutos . " minutos. </strong> <br/>");
            // transformando o valor digitado em horas //
            $horas = $segundos / 3600;
            /* dizendo ao usuario quantas horas ele tem 
            em relação valor digitado */
            echo ("Você tem um total de <strong>" . $horas . " horas </strong> <br/>");
            // transformando o valor digitado em dias
            $dias = $segundos / 86400;
            /* dizendo ao usuario quantos dias ele tem 
            em relação valor digitado */
            echo ("Você tem um total de <strong>" . $dias . " dias </strong> <br/>");

            ?>
        </p>

     </body>
</html>