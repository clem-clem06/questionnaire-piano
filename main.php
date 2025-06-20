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
        session_start();
        require_once __DIR__ . '/vendor/autoload.php';
        enregistrement();

        #region mail
        if(!isset($_SESSION['reponses']['mail'])) {
            demande_mail();
        }
        #endregion

        #region Q1
        if(!isset($_SESSION['reponses']['pianiste']) && isset($_SESSION['reponses']['mail'])) {
            Q1_pianiste();
        }
        #endregion

        #region Q2
        if (isset($_SESSION['reponses']['pianiste']) && !isset($_SESSION['reponses']['piano'])) {
            Q2_piano($_SESSION['reponses']['pianiste']);
        }
        #endregion

        #region Q3
        if(isset($_SESSION['reponses']['pianiste']) && isset($_SESSION['reponses']['piano']) && $_SESSION['reponses']['pianiste'] == '1'&&
            !isset($_SESSION['reponses']['pro/am'])) {
            Q3_pro_am();
        }
        #endregion

        #region Q10
        if (isset($_SESSION['reponses']['piano']) && $_SESSION['reponses']['piano'] == '3' && (!isset($_SESSION['reponses']['instrument']))) {
            Q10_acquerir();
        }
        #endregion

        #region Q11
        if (isset($_SESSION['reponses']['pianiste']) && $_SESSION['reponses']['pianiste'] == '2' && !isset($_SESSION['reponses']['motivation'])) {
            if ((isset($_SESSION['reponses']['piano']) && $_SESSION['reponses']['piano'] == '3' && isset($_SESSION['reponses']['instrument']))
                ||
                (isset($_SESSION['reponses']['piano']) && $_SESSION['reponses']['piano'] != '3')) {
                Q11_motivation();
            }
        }
        #endregion

        #region Q4
        if (isset($_SESSION['reponses']['pro/am']) && $_SESSION['reponses']['pro/am'] == '1' && !isset($_SESSION['reponses']['experience'])){
            Q4_experience();
        }
        #endregion

        #region Q5
        if ((isset($_SESSION['reponses']['experience']) && !isset($_SESSION['reponses']['problematiques']))
            ||
            (isset($_SESSION['reponses']['prof']) && !isset($_SESSION['reponses']['problematiques']))) {
            Q5_problematiques($_SESSION['reponses']['prof'] ?? null);
        }
        #endregion

        #region Q6
        if ((isset($_SESSION['reponses']['experience']) && isset($_SESSION['reponses']['problematiques']) && $_SESSION['reponses']['experience'] == '2' && !isset($_SESSION['reponses']['accompagnement']))
            ||
            (isset($_SESSION['reponses']['pourquoi']) && !isset($_SESSION['reponses']['accompagnement']))
            ||
            (isset($_SESSION['reponses']['style']) && !isset($_SESSION['reponses']['accompagnement'])))
        {
            Q6_accompagnement();
        }
        #endregion

        #region Q7
        if( isset($_SESSION['reponses']['accompagnement']) && !isset($_SESSION['reponses']['format'])){
            Q7_format();
        }
        #endregion

        #region Q8
        if(isset($_SESSION['reponses']['experience']) && isset($_SESSION['reponses']['problematiques']) && $_SESSION['reponses']['experience']=='3' && !isset($_SESSION['reponses']['academie'])){
            Q8_academie();
        }
        #endregion

        #region Q13
        if(isset($_SESSION['reponses']['academie']) && $_SESSION['reponses']['academie']=='2' && !isset($_SESSION['reponses']['pourquoi'])){
            Q13_pourquoi();
        }
        #endregion

        #region Q12
        if( isset($_SESSION['reponses']['pro/am']) && $_SESSION['reponses']['pro/am']=='2' && !isset($_SESSION['reponses']['prof'])) {
            Q12_prof();
        }
        #endregion

        #region Q9
        if(isset($_SESSION['reponses']['problematiques']) && $_SESSION['reponses']['pro/am'] == '2' && !isset($_SESSION['reponses']['style'])) {
            Q9_style();
        }
        #endregion

        #region O1
        if (
            (isset($_SESSION['reponses']['motivation']))
            ||
            (isset($_SESSION['reponses']['problematiques']) && isset($_SESSION['reponses']['experience']) && $_SESSION['reponses']['experience'] == '1')
            ||
            (isset($_SESSION['reponses']['experience'], $_SESSION['reponses']['accompagnement'], $_SESSION['reponses']['format']) && $_SESSION['reponses']['experience'] == '2' && $_SESSION['reponses']['accompagnement'] == '1' && $_SESSION['reponses']['format'] == '1')
            ||
            (isset($_SESSION['reponses']['experience'], $_SESSION['reponses']['accompagnement'], $_SESSION['reponses']['format'], $_SESSION['reponses']['academie']) && $_SESSION['reponses']['experience'] == '3' && $_SESSION['reponses']['accompagnement'] == '1' && $_SESSION['reponses']['format'] == '1' && $_SESSION['reponses']['academie'] == '2')) {
            O1_coulisse();
        }
        #endregion

        #regoin O2
        if(
            (isset($_SESSION['reponses']['academie']) && $_SESSION['reponses']['academie'] == '1')
            ||
            (isset($_SESSION['reponses']['experience'],$_SESSION['reponses']['accompagnement'],$_SESSION['reponses']['format'] ) && $_SESSION['reponses']['experience'] == '2' && $_SESSION['reponses']['accompagnement'] == '1' && $_SESSION['reponses']['format'] == '1')
            ||
            (isset($_SESSION['reponses']['pro/am'],$_SESSION['reponses']['accompagnement'],$_SESSION['reponses']['format'] ) && $_SESSION['reponses']['pro/am'] == '2' && $_SESSION['reponses']['accompagnement'] == '1' && $_SESSION['reponses']['format'] == '1')){
            O2_academie();
        }
        #endregion

        #region O3/O4
        if (isset($_SESSION['reponses']['accompagnement'],$_SESSION['reponses']['format'] ) && $_SESSION['reponses']['accompagnement'] == '1' && $_SESSION['reponses']['format'] == '2'){
            O3_stage_masteurclasses();
            O4_retraite();
        }
        #endregion

        #region O5
        if (isset($_SESSION['reponses']['accompagnement'],$_SESSION['reponses']['format'] ) && $_SESSION['reponses']['accompagnement'] == '2' && $_SESSION['reponses']['format'] == '1'){
            O5_mentorat();
        }
        #endregion

        #region O6
        if (isset($_SESSION['reponses']['accompagnement'],$_SESSION['reponses']['format'] ) && $_SESSION['reponses']['accompagnement'] == '2' && $_SESSION['reponses']['format'] == '2'){
            O6_presence();
        }
        #endregion


        if(isset ($_SESSION['reponses'])){
            echo '<pre>';
            print_r($_SESSION['reponses']);
            echo '</pre>';
        }

        ?>
        <form method="post">
            <input type="hidden" name="reset" value="1">
            <button type="submit">Recommencer</button>
        </form>
    </main>
    </body>
</html>