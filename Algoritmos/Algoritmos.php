<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Algoritmos de Ordenación</title>
    </head>
    <body>
        <?php
            function binaria($vector) {
            $max= count($vector);
            for ($i = 1; $i < $max; $i++) {
                $aux = $vector[$i];
                $esq = 0;
                $dre = $i - 1;
                while ($esq <= $dre) {
                    $centre = (($esq + $dre) / 2);
                    if ($aux < $vector[$centre]) {
                        $dre = $centre - 1;
                    } else {
                        $esq = $centre + 1;
                    }
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
        ?>
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
        ?>
        <?php
        function seleccio_Directe($vector) {
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
        ?>
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
        ?>
        <?php
            function quick_sort($vector) {
                $max = count($vector);
                if ($max<=1){
                    return $vector;
                }else {
                    $pivot = $vector[0];
                    $dre = $esq = array();
                    for ($i=1;$i<count($vector);$i++){
                        if ($vector[$i]<$pivot){
                            $esq[]=$vector[$i];
                        }else {
                            $dre[]=$vector[$i];
                        }
                    }
                    return $vector;
                }
            }
        ?>
        <form action="" method="post">
            Quin tipus d'ordenació vols?
            <select name='algoritmes'>
                <option value="binaria">Binaria</option>
                <option value="i_directe">Inserció Directe</option>
                <option value="s_directe">Selecció Directe</option>
                <option value='bimbolla'>Bimbolla</option>
                <option value='quick_sort'>Quick Sort</option>
            </select>
            <br/>
            <input name="genera" type="submit"/>
            </select>
        </form>
    </body>
</html>
