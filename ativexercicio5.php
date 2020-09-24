<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Programação WEB - SPI</title>
    </head>
    <body>
        <p>
            <?php
            
            $nota1 = 5;
            $nota2 = 5;
            $nota3 = 5;
            $notafinal = (($nota1 + $nota2 + $nota3) / 3 );
            echo ("Sua nota da unidade 1 foi $nota1 <br/>");
            echo ("Sua nota da unidade 2 foi $nota2 <br/>");
            echo ("Sua nota da unidade 3 foi $nota3 <br/>");
            
            if ($notafinal >= 6)
            {
                echo ("Voce esta aprovado!");
            }
            elseif ($notafinal <= 3)
            {
                echo ("Voce esta reprovado!");
            }
            elseif ($notafinal < 6 )
            {
                echo ("Voce esta de recuperacao!");
            }
            

            ?>
        </p>
    
    </body>
</html>
