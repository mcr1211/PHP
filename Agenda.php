<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agenda</title>
    </head>
    <body>
        <?php
            if (isset($_POST['agenda'])) {
            $agenda = $_POST['agenda'];
        } else {
            $agenda = array();
        }
        if (isset ($_POST ['action'])&& $_POST['action'] === "nou"){
                $nou_nom = $_POST["nom"];
                $nou_telefon = $_POST["telefon"];
                if (empty($nou_nom)) {
            echo "<p>Falta telefon.</p><br />";
            } elseif (empty($nou_telefon)) {
                unset($agenda[$nou_nom]);
            } else {
                $agenda[$nou_nom] = $nou_telefon;
            }
        }
        ?>
        <h2>AGENDA</h2>
        <?php
            if(count($agenda)==0){
                echo "<p>Està buida</p>";
            }else {
                echo "<ul>";
                    foreach ($agenda as $nom => $telefon) {
                        echo "<li>" . $nom . ': ' . $telefon . "</li>";
                    }
                echo "</ul>";
            }
        ?>
        <form method="post">
            <p>Nom: <input name="nom" type="text" size="20px"></p>
            <p>Telefon: <input name="telefon" type="text" size="20px"></p>
            <input type="submit" name="submit" value="Afegeix!!">
        </form>
        <?php
            foreach ($agenda as $id=> $task ){
                echo 'input type="hidden" name="agenda['.$id.']" ';
                echo 'value= '.$task.'"/>';
            }
        ?>
    </body>
</html>