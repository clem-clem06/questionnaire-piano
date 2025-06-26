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

            #region Q
            #region Q14_info-perso
            if(
                !isset($_SESSION['reponses']['mail'])) {
                Q14_info_perso();
            }
            #endregion

            #region Q1
            if(
                !isset($_SESSION['reponses']['pianiste']) && isset($_SESSION['reponses']['mail'])) {
                Q1_pianiste();
            }
            #endregion

            #region Q2
            if (
                isset($_SESSION['reponses']['pianiste']) &&
                !isset($_SESSION['reponses']['piano'])
            ) {
                Q2_piano();
            }
            #endregion

            #region Q3
            if (
                isset($_SESSION['reponses']['pianiste'], $_SESSION['reponses']['piano']) &&
                $_SESSION['reponses']['pianiste'] === '1' &&
                !isset($_SESSION['reponses']['pro/am']) &&
                (
                    $_SESSION['reponses']['piano'] === '1' ||
                    $_SESSION['reponses']['piano'] === '2' ||
                    (
                        $_SESSION['reponses']['piano'] === '3' &&
                        isset($_SESSION['reponses']['instrument'])))){
                Q3_pro_am();
            }
            #endregion

            #region Q10
            if (
                isset($_SESSION['reponses']['piano']) &&
                $_SESSION['reponses']['piano'] === '3' &&
                !isset($_SESSION['reponses']['instrument'])
            ) {
                Q10_acquerir();
            }
            #endregion

            #region Q11
            if (
                isset($_SESSION['reponses']['pianiste'], $_SESSION['reponses']['piano']) &&
                $_SESSION['reponses']['pianiste'] === '2' &&
                !isset($_SESSION['reponses']['motivation']) &&
                (
                    ($_SESSION['reponses']['piano'] === '3' && isset($_SESSION['reponses']['instrument'])) ||
                    $_SESSION['reponses']['piano'] !== '3'
                )
            ) {
                Q11_motivation();
            }
            #endregion

            #region Q4
            if (
                isset($_SESSION['reponses']['pro/am']) &&
                $_SESSION['reponses']['pro/am'] === '1' &&
                !isset($_SESSION['reponses']['experience'])
            ) {
                Q4_experience();
            }
            #endregion

            #region Q5
            if (
                !isset($_SESSION['reponses']['problematiques']) &&
                (
                    isset($_SESSION['reponses']['experience']) ||
                    isset($_SESSION['reponses']['prof'])
                )
            ) {
                $prof = $_SESSION['reponses']['prof'] ?? null;
                $experience = $_SESSION['reponses']['experience'] ?? null;
                Q5_problematiques($prof,$experience);
            }
            #endregion

            #region Q6
            if (
                !isset($_SESSION['reponses']['accompagnement']) && (
                    (isset($_SESSION['reponses']['experience'], $_SESSION['reponses']['problematiques']) && in_array($_SESSION['reponses']['experience'], ['2', '3'])) ||
                    isset($_SESSION['reponses']['style'])
                )
            ) {
                Q6_accompagnement();
            }
            #endregion

            #region Q7
            if (
                isset($_SESSION['reponses']['accompagnement']) &&
                !isset($_SESSION['reponses']['format'])
            ) {
                Q7_format();
            }
            #endregion

            #region Q8
            if (
                isset($_SESSION['reponses']['accompagnement'], $_SESSION['reponses']['format']) &&
                $_SESSION['reponses']['accompagnement'] === '1' &&
                $_SESSION['reponses']['format'] === '1' &&
                !isset($_SESSION['reponses']['academie']) &&
                (
                    (isset($_SESSION['reponses']['experience']) &&
                        ($_SESSION['reponses']['experience'] === '2' || $_SESSION['reponses']['experience'] === '3'))
                    ||
                    (isset($_SESSION['reponses']['pro/am']) && $_SESSION['reponses']['pro/am'] === '2')
                )
            ) {
                Q8_academie();
            }
            #endregion

            #region Q13
            if (
                !isset($_SESSION['reponses']['pourquoi']) &&
                isset($_SESSION['reponses']['academie']) &&
                $_SESSION['reponses']['academie'] === '2'
            ) {
                Q13_pourquoi();
            }
            #endregion

            #region Q12
            if (
                isset($_SESSION['reponses']['pro/am']) &&
                $_SESSION['reponses']['pro/am'] === '2' &&
                !isset($_SESSION['reponses']['prof'])
            ) {
                Q12_prof();
            }
            #endregion

            #region Q9
            if (
                isset($_SESSION['reponses']['problematiques']) &&
                isset($_SESSION['reponses']['pro/am']) &&
                $_SESSION['reponses']['pro/am'] === '2' &&
                !isset($_SESSION['reponses']['style'])
            ) {
                Q9_style();
            }
            #endregion

            #region Q15
            if (
                !isset($_SESSION['reponses']['autre']) &&
                (
                    isset($_SESSION['reponses']['motivation'])
                    ||
                    (isset($_SESSION['reponses']['problematiques'], $_SESSION['reponses']['experience']) && $_SESSION['reponses']['experience'] == '1')
                    ||
                    ( isset($_SESSION['reponses']['academie'], $_SESSION['reponses']['pourquoi']) &&
                        $_SESSION['reponses']['academie'] == '2'
                    )
                    ||
                    (isset($_SESSION['reponses']['accompagnement'], $_SESSION['reponses']['format']) &&
                        $_SESSION['reponses']['accompagnement'] == '1' &&
                        $_SESSION['reponses']['format'] == '2')
                    ||
                    (isset($_SESSION['reponses']['accompagnement'], $_SESSION['reponses']['format']) &&
                        $_SESSION['reponses']['accompagnement'] == '2' &&
                        $_SESSION['reponses']['format'] == '1')
                    ||
                    (isset($_SESSION['reponses']['accompagnement'], $_SESSION['reponses']['format']) &&
                        $_SESSION['reponses']['accompagnement'] == '2' &&
                        $_SESSION['reponses']['format'] == '2')
                    ||
                    (isset($_SESSION['reponses']['academie']) &&
                        $_SESSION['reponses']['academie'] == '1'
                    )
                )
            ) {
                Q15_autre();
            }
            #endregion
            #endregion

            #region R
            #region non pianiste
            if (
                isset($_SESSION['reponses']['autre'], $_SESSION['reponses']['pianiste']) &&
                $_SESSION['reponses']['pianiste'] === '2'
            ) {
                R1_amateur();
                $Id_mail = 1;
                envoie_mail($Id_mail);
                $_SESSION['mail_sent'] = true;
            }
            #endregion

            #region -5ans
            if (
                isset($_SESSION['reponses']['autre'], $_SESSION['reponses']['experience']) &&
                $_SESSION['reponses']['experience'] === '1'
            ) {
                R1_amateur();
                $Id_mail = 1;
                envoie_mail($Id_mail);
                $_SESSION['mail_sent'] = true;
            }
            #endregion

            #region amateur et groupe digital
            if(
                isset($_SESSION['reponses']['autre'], $_SESSION['reponses']['format'], $_SESSION['reponses']['accompagnement'], $_SESSION['reponses']['pro/am']) &&
                $_SESSION['reponses']['accompagnement'] === '1' &&
                $_SESSION['reponses']['format'] == '1' &&
                $_SESSION['reponses']['pro/am'] === '1'
            ) {
                R1_amateur();
                $Id_mail = 4;
                envoie_mail($Id_mail);
                $_SESSION['mail_sent'] = true;
            }
            #endregion

            #region amateur et groupe present
            if (
                isset(
                    $_SESSION['reponses']['autre'],
                    $_SESSION['reponses']['pro/am'],
                    $_SESSION['reponses']['accompagnement'],
                    $_SESSION['reponses']['format']
                ) &&
                $_SESSION['reponses']['pro/am'] === '1' &&
                $_SESSION['reponses']['accompagnement'] === '1' &&
                $_SESSION['reponses']['format'] === '2'
            ) {
                R1_amateur();
                $Id_mail = 2;
                envoie_mail($Id_mail);
                $_SESSION['mail_sent'] = true;
            }
            #endregion

            #region amateur et induviduel et digi
            if (
                isset(
                    $_SESSION['reponses']['autre'],
                    $_SESSION['reponses']['pro/am'],
                    $_SESSION['reponses']['accompagnement'],
                    $_SESSION['reponses']['format']
                ) &&
                $_SESSION['reponses']['pro/am'] === '1' &&
                $_SESSION['reponses']['accompagnement'] === '2' &&
                $_SESSION['reponses']['format'] === '1'
            ) {
                R1_amateur();
                $Id_mail = 5;
                envoie_mail($Id_mail);
                $_SESSION['mail_sent'] = true;
            }
            #endregion

            #region amateur et induviduel et present
            if (
                isset(
                    $_SESSION['reponses']['autre'],
                    $_SESSION['reponses']['pro/am'],
                    $_SESSION['reponses']['accompagnement'],
                    $_SESSION['reponses']['format']
                ) &&
                $_SESSION['reponses']['pro/am'] === '1' &&
                $_SESSION['reponses']['accompagnement'] === '2' &&
                $_SESSION['reponses']['format'] === '2'
            ) {
                R1_amateur();
                $Id_mail = 6;
                envoie_mail($Id_mail);
                $_SESSION['mail_sent'] = true;
            }
            #endregion

            #region pro
            if (
                isset(
                    $_SESSION['reponses']['autre'],
                    $_SESSION['reponses']['pro/am'],
                ) &&
                $_SESSION['reponses']['pro/am'] === '2'
            ) {
                R2_pro();
                $Id_mail = 3;
                envoie_mail($Id_mail);
                $_SESSION['mail_sent'] = true;
            }
            #endregion
            #endregion



            if(isset ($_SESSION['reponses'])){
                echo '<pre>';
                print_r($_SESSION['reponses']);
                echo '</pre>';
            }

            ?>
        </main>
    </body>
</html>