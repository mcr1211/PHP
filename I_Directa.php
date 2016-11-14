<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function inserció_directe($vector) {
            $max = count($vector);
            for ($i = 0; $i < $max; $i++) {
                $aux = $vector[$i];
                $j = $i - 1;
                while ((j >= 0) & ($aux < $vector[$j])) {
                    $vector[$j + 1] = $vector[$j];
                    $j--;
                }
                $vector[$j + 1] = $aux;
            }
        }
        
        function main() {
            $Desordenat = array(56, 55, 99, 32, 2, 33);
            $Ordenat = inserció_directe($Desordenat);
            $ord= count($Ordenat);
            
            for ($i = 0; $i < $ord; $i++) {
                echo $Ordenat[$i] . "\n";
            }
        }
        main();
        ?>
    </body>
</html>
