<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class BDD
{
    private PDO $pdo;

    public function __construct()
    {
        $hote = 'localhost';
        $nom_bdd = 'piano';
        $utilisateur = 'root';
        $mot_de_passe = '';

        try {
            $this->pdo = new PDO("mysql:host=$hote;port=3308;dbname=$nom_bdd;charset=utf8mb4", $utilisateur, $mot_de_passe);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            exit("Erreur de connexion : " . $e->getMessage());
        }
    }

    public function enregistrerReponses(): array {
        if (!isset($_SESSION['reponses']['nom'], $_SESSION['reponses']['mail'])) {
            return ['success' => false, 'message' => "Nom ou mail manquant dans la session."];
        }

        $nom = trim($_SESSION['reponses']['nom']);
        $mail = trim($_SESSION['reponses']['mail']);
        $reponses = $_SESSION['reponses'];
        unset($reponses['nom'], $reponses['mail']);

        try {
            // 1. Insérer l'utilisateur
            $stmtUser = $this->pdo->prepare("INSERT INTO utilisateur (nom, mail) VALUES (?, ?)");
            $stmtUser->execute([$nom, $mail]);
            $utilisateurId = $this->pdo->lastInsertId();

            // 2. Récupérer questions
            $questions = [];
            $stmt = $this->pdo->query("SELECT identifiant, id, type FROM question");
            foreach ($stmt as $row) {
                $questions[$row['identifiant']] = ['id' => $row['id'], 'type' => $row['type']];
            }

            $stmtSimple = $this->pdo->prepare("INSERT INTO reponse_utilisateur (utilisateur_id, question_id, valeur) VALUES (?, ?, ?)");
            $stmtMultiple = $this->pdo->prepare("INSERT INTO reponse_utilisateur_multiple (reponse_id, utilisateur_id, valeur) VALUES (?, ?, ?)");

            foreach ($reponses as $champ => $valeur) {
                if (!isset($questions[$champ])) continue;

                $questionId = $questions[$champ]['id'];
                $type = $questions[$champ]['type'];

                if (is_array($valeur) && $type === 'checkbox') {
                    $this->pdo->beginTransaction();
                    try {
                        $stmtSimple->execute([$utilisateurId, $questionId, null]);
                        $reponseId = $this->pdo->lastInsertId();

                        foreach ($valeur as $item) {
                            if (is_scalar($item)) {
                                $stmtMultiple->execute([$reponseId, $utilisateurId, trim($item)]);
                            }
                        }

                        $this->pdo->commit();
                    } catch (Exception $e) {
                        $this->pdo->rollBack();
                        return ['success' => false, 'message' => "Erreur insert checkbox : " . $e->getMessage()];
                    }
                } elseif (is_scalar($valeur)) {
                    try {
                        $stmtSimple->execute([$utilisateurId, $questionId, trim($valeur)]);
                    } catch (Exception $e) {
                        return ['success' => false, 'message' => "Erreur insert simple : " . $e->getMessage()];
                    }
                }
            }

            return ['success' => true, 'message' => "Réponses enregistrées avec succès."];
        } catch (Exception $e) {
            return ['success' => false, 'message' => "Erreur lors de l'insertion utilisateur : " . $e->getMessage()];
        }
    }
}