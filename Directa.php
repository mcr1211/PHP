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

        function Directa($vector) {
            $max= count($vector);
            for ($i = 1; $i < $max; $i++) {
                $aux = $vector[$i];
                $j = $i - 1;
                while ($j >= 0 && $vector[$j] > $aux) {
                    $vector[$j + 1] = $vector[$j];
                    $j--;
                }

                $vector[$j + 1] = $aux;
            }

            return $vector;
        }

        function main() {

            $Desordenat = array(105, 64, 993, 22, 351);

            $Ordenat = Directa($Desordenat);
            $ord= count($Ordenat);
            for ($i = 0; $i < $ord; $i++) {
        echo $Ordenat[$i] . "\n";
    }
}

        main();
        ?>
    </body>
</html>
