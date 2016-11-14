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
        function bimbolla($vector) {
            $max = count($vector);
            for ($i = 1; $i < $max; $i++) {
                for ($j = 0; $j < $max - $i; $j++) {
                    if ($vector[$j] > $vector[$j + 1]) {
                        $aux = $vector[$j + 1];
                        $vector[$j + 1] = $vector[$j];
                        $vector[$j] = $aux;
                    }
                }
            }

            return $vector;
        }

        function main() {

            $Desordenat = array(195, 654, 123, 8052, 661);
            $Ordenat = bimbolla($Desordenat);
            $ord = count($Ordenat);

            for ($i = 0; $i < $ord; $i++) {
                echo $Ordenat[$i] . "\n";
            }
        }

        main();
        ?>
    </body
</html>
