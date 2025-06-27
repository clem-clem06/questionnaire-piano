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
        <script src="script/script.js" defer></script>
        <title>Question Piano</title>
        <img src="https://storage.tally.so/4aa5228b-344f-4d84-99cd-ac2d7fbc2432/Carrees-6-.png" alt="Logo" class="logo">
        <img src="https://storage.tally.so/68e2af3f-d108-4440-91b4-46f9813bdaa2/Images-paysage-pour-blog.jpg" alt="Form cover" class="cover">
    </head>
    <body>
        <main>
            <h1>Quiz piano</h1>
            <?php
            chemin_questionnaire();
            ?>
        </main>
    </body>
</html>