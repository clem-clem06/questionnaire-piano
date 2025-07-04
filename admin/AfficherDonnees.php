<?php
class AfficherDonnees {
    private PDO $pdo;

    public function __construct() {
        $hote = 'localhost';
        $base = 'piano';
        $utilisateur = 'root';
        $motDePasse = '';

        try {
            $this->pdo = new PDO("mysql:host=$hote;port=3308;dbname=$base;charset=utf8", $utilisateur, $motDePasse);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }

    public function afficherTout(): void {
        $tables = [
            'utilisateur',
            'question',
            'reponse_possible',
            'reponse_utilisateur',
            'reponse_utilisateur_multiple'
        ];

        foreach ($tables as $table) {
            echo "<h2>Table : $table</h2>";
            try {
                if ($table === 'utilisateur') {
                    $stmt = $this->pdo->query("SELECT * FROM $table ORDER BY date DESC");
                } else {
                    $stmt = $this->pdo->query("SELECT * FROM $table");
                }

                $resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if (empty($resultats)) {
                    echo "<p>Aucune donnée.</p>";
                } else {
                    echo "<table border='1' cellpadding='5'><tr>";
                    foreach (array_keys($resultats[0]) as $colonne) {
                        echo "<th>$colonne</th>";
                    }
                    echo "</tr>";

                    foreach ($resultats as $ligne) {
                        echo "<tr>";
                        foreach ($ligne as $valeur) {
                            echo "<td>" . htmlspecialchars((string) $valeur) . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table><br>";
                }
            } catch (PDOException $e) {
                echo "<p>Erreur lors de l'affichage de la table $table : " . $e->getMessage() . "</p>";
            }
        }
    }
}