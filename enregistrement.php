<?php
function enregistrement()
{
    #region enregistrement
    if (isset($_POST['reset'])) {
    unset($_SESSION['reponses']);
    }

    if (isset($_POST['mail'])) {
        unset($_SESSION['reponses']);
        $_SESSION['reponses']['mail'] = $_POST['mail'];
    }

    if (isset($_POST['pianiste'])) {
    $_SESSION['reponses']['pianiste'] = $_POST['pianiste'];
    }

    if (isset($_POST['piano'])) {
    $_SESSION['reponses']['piano'] = $_POST['piano'];
    }

    if (isset($_POST['pro/am'])) {
    $_SESSION['reponses']['pro/am'] = $_POST['pro/am'];
    }

    if (isset($_POST['instrument'])) {
    $_SESSION['reponses']['instrument'] = $_POST['instrument'];
    }

    if( isset($_POST['motivation'])) {
    $_SESSION['reponses']['motivation'] = $_POST['motivation'];
    }

    if (isset($_POST['experience'])) {
    $_SESSION['reponses']['experience'] = $_POST['experience'];
    }

    if (isset($_POST['problematiques'])) {
    $_SESSION['reponses']['problematiques'] = $_POST['problematiques'];
    }

    if (isset($_POST['accompagnement'])) {
    $_SESSION['reponses']['accompagnement'] = $_POST['accompagnement'];
    }

    if (isset($_POST['format'])) {
    $_SESSION['reponses']['format'] = $_POST['format'];
    }

    if (isset($_POST['academie'])) {
    $_SESSION['reponses']['academie'] = $_POST['academie'];
    }

    if (isset($_POST['pourquoi'])) {
    $_SESSION['reponses']['pourquoi'] = $_POST['pourquoi'];
    }

    if (isset($_POST['prof'])) {
    $_SESSION['reponses']['prof'] = $_POST['prof'];
    }

    if (isset($_POST['style'])) {
    $_SESSION['reponses']['style'] = $_POST['style'];
    }
    #endregion
}