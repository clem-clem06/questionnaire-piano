<?php
session_start();

if (!isset($_SESSION['reponses'])) {
    $_SESSION['reponses'] = [];
}
require_once __DIR__ . '/vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (enregistrement()) {
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
}
?>
<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/normalize.css">
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/footer.css">
        <script src="script/script.js" defer></script>
        <title>Question Piano</title>
    </head>
    <body>
    <div class="images">
        <img src="https://storage.tally.so/4aa5228b-344f-4d84-99cd-ac2d7fbc2432/Carrees-6-.png" alt="Logo" class="logo">
        <img src="https://storage.tally.so/68e2af3f-d108-4440-91b4-46f9813bdaa2/Images-paysage-pour-blog.jpg" alt="Form cover" class="cover">
    </div>
        <main>
            <h1>Quiz piano</h1>
            <?php
            retour();

            chemin_questionnaire();
            ?>
        </main>
    </body>
    <footer class="footer">
        <div class="contenu-footer">
            <p class="signature-footer">
                Christine Jeandroz<br>
                J'accompagne les pianistes de haut niveau et professionnels dans leur évolution.
            </p>

            <nav class="liens-footer">
                <a href="https://store.christinejeandroz.com/mentions-legales">Mentions légales</a>
                <a href="https://store.christinejeandroz.com/cgu-cgv-septembre-2024">CGV</a>
                <a href="https://christinejeandroz.com/contact-christine-jeandroz/">Contact</a>
            </nav>

            <p class="texte-footer">&copy; 2025 Sérénité Piano · Tous droits réservés</p>

            <table>
                <tbody class="footer-bas">
                    <tr>
                        <td class="createur-site">
                                Site créé par&nbsp;<a>JULIEN Clément</a>
                        </td>
                        <td class="reseaux-sociaux">
                                <a href="https://www.facebook.com/christinejeandroz.pianiste" target="_blank">
                                    <img class="logo-reseaux" src="img/logo-facebook.svg" alt="Facebook">
                                </a>
                                <a href="https://www.linkedin.com/in/christine-jeandroz/" target="_blank">
                                    <img class="logo-reseaux" src="img/logo-linkedin.svg" alt="LinkedIn">
                                </a>
                                <a href="https://www.instagram.com/christinejeandroz/" target="_blank">
                                    <img class="logo-reseaux" src="img/logo-instagram.svg" alt="Instagram">
                                </a>
                        </td>
                    </tr>
                </tbody>
            </table>
    </footer>
</html>