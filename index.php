<?php 
include 'bdd.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Inventaire Sono</title>
    <style>
        table { border-collapse: collapse; width: 50%; margin: 20px auto; font-family: sans-serif; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h2 style="text-align: center;">Liste de mon matériel de sono</h2>

    <table>
        <tr>
            <th>Nom</th>
            <th>Marque</th>
        </tr>

        <?php
        $requete = mysqli_query($conn, "SELECT Nom, Nom_marque FROM materiel");

        if ($requete) {
            while ($ligne = mysqli_fetch_array($requete, MYSQLI_ASSOC)) {
                echo "<tr>
                        <td>" . $ligne["Nom"] . "</td>
                        <td>" . $ligne["Nom_marque"] . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='2' style='color:red;'>Erreur SQL : " . mysqli_error($conn) . "</td></tr>";
        }

        mysqli_close($conn);
        ?>
    </table>

</body>
</html>