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

        function seleccioDirecte($vector) {
            $max= count($vector);
            for ($i = 0; $i < $max - 1; $i++) {
                $min = $i;
                for ($j = $i + 1; $j < $max; $j++) {
                    if ($vector[$min] > $vector[$j]) {
                        $min = $j;
                    }
                }
                $aux = $vector[$min];
                $vector[$min] = $vector[$i];
                $vector[$i] = $aux;
            }

            return $vector;
        }

        function main() {

            $Desordenat = array(522, 134, 123, 852, 741);
            $Ordenat = seleccioDirecte($Desordenat);
            $ord = count($Ordenat);

            for ($i = 0; $i < $ord; $i++) {
                echo $Ordenat[$i] . "\n";
            }
        }

        main();
        ?>
    </body>
</html>
