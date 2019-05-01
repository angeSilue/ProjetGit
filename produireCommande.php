<!-- 
	auteur  : Ange-Christian Silue
	date 	: Mai 2019
	but 	: Faire afficher une facture de pieces autos 
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Commande</title>
        <style type="text/css">

            h1 {
                text-align : center;

            }

            body
            {
                background-color : silver;
            }

        </style>
        <?php
        define("PRIX_PNEUX", 100);
        define("PRIX_HUILES", 10);
        define("PRIX_BOUGIES", 4);

        $nbPneux = 0;
        $nbHuiles = 0;
        $nbBougies = 0;
        ?>
    </head>

<body>
<h1>Ange PiÃ¨ces d'auto</h1>
        <hr />
        <br />
        <?php
        echo '<h2>Commande produite Ã  ' . date('G:i \l\e d-m-y ') . '</h2><br />' . "\n";

        if (isset($_POST['txtPneux']) && is_numeric($_POST['txtPneux'])) {
            $nbPneux = $_POST['txtPneux'];
        }

        if (isset($_POST['txtHuile']) && is_numeric($_POST['txtHuile'])) {
            $nbHuiles = $_POST['txtHuile'];
        }

        if (isset($_POST['txtBougies']) && is_numeric($_POST['txtBougies'])) {
            $nbBougies = $_POST['txtBougies'];
        }


        //calcul
        $totalItem = $nbBougies + $nbPneux + $nbHuiles;
        $prixTotal = $nbBougies * PRIX_BOUGIES + $nbPneux * PRIX_PNEUX + $nbHuiles * PRIX_HUILES;

        //sortie
        echo "<ul><li>Nombre total d'items : $totalItem </li>\n";
        echo "<li>DÃ©tails de la commande</li>\n";
        echo "<ol><li>Pneux: $nbPneux </li>\n";
        echo "<li>Huile: $nbHuiles </li>\n";
        echo "<li>Bougies: $nbBougies </li></ol>\n";
        echo "<li>Prix Total :$" . number_format($prixTotal, 2) . "</li></ul>";
        ?>
</body>

</html>
