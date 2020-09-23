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
            $nota2 = 6;
            $nota3 = 9;
            $notafinal = ($nota1 + $nota2 + $nota3);
            echo ("Sua nota da unidade 1 foi $nota1 <br/>");
            echo ("Sua nota da unidade 2 foi $nota2 <br/>");
            
            if ($notafinal >= 6)
            {
                echo ("Voce esta aprovado!");
            }
            elseif ($notafinal < 6)
            {
                echo ("Voce esta de recuperacao!");
            }
            else ($notafinal <= 3)
            {
                echo ("Voce esta reprovado!");
            }

            ?>
        </p>
    
    </body>
</html>