<?php
class BDD
{
    function __construct($pdo)
    {
        $hote = 'localhost';
        $nom_bdd = 'ma_base_de_donnees';
        $utilisateur = 'mon_utilisateur';
        $mot_de_passe = 'mon_mot_de_passe';

        $pdo = new PDO("mysql:host=$hote;dbname=$nom_bdd;charset=utf8", $utilisateur, $mot_de_passe);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function createAnswer($pdo)
    {
        try {
            // Requête SQL
            $sql = "SELECT * FROM utilisateurs WHERE actif = :actif";

            // Préparation de la requête
            $stmt = $pdo->prepare($sql);

            // Liaison des paramètres
            $stmt->bindValue(':actif', 1, PDO::PARAM_INT);

            // Exécution
            $stmt->execute();

            // Récupération des résultats
            $resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Affichage
            foreach ($resultats as $utilisateur) {
                echo "Nom : " . $utilisateur['nom'] . "<br>";
                echo "Email : " . $utilisateur['email'] . "<br><br>";
            }

        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
}