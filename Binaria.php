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
        function Binaria($vector) {
            $max= count($vector);
            for ($i = 1; $i < $max; $i++) {
                $aux = $vector[$i];
                $esq = 0;
                $dre = $i - 1;

                while ($esq <= $dre) {
                    $centre = (($esq + $dre) / 2);
                    if ($aux < $vector[$centre])
                        $dre = $centre - 1;
                    else
                        $esq = $centre + 1;
                }
                
                $j = $i - 1;

                while ($j >= $esq) {
                    $vector[$j + 1] = $vector[$j];
                    $j = $j - 1;
                }
                $vector[$esq] = $aux;
            }

            return $vector;
        }

        function main() {

            $Desordenat = array(52, 24, 43, 62, 11);

            $Ordenat = Binaria($Desordenat);
            $ord= count($Ordenat);
            for ($i = 0; $i < $ord; $i++) {
        echo $Ordenat[$i] . "\n";
    }
}
        main();
        ?>
    </body>
</html>
