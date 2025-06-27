<?php
    function chemin_questionnaire(){
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
        if (!isset($_SESSION['mail_sent'])) {
            envoie_mail($Id_mail);
            $_SESSION['mail_sent'] = true;
        }
    }
    #endregion

    #region -5ans
    if (
        isset($_SESSION['reponses']['autre'], $_SESSION['reponses']['experience']) &&
        $_SESSION['reponses']['experience'] === '1'
    ) {
        R1_amateur();
        $Id_mail = 1;
        if (!isset($_SESSION['mail_sent'])) {
            envoie_mail($Id_mail);
            $_SESSION['mail_sent'] = true;
        }
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
        if (!isset($_SESSION['mail_sent'])) {
            envoie_mail($Id_mail);
            $_SESSION['mail_sent'] = true;
        }
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
        if (!isset($_SESSION['mail_sent'])) {
            envoie_mail($Id_mail);
            $_SESSION['mail_sent'] = true;
        }
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
        if (!isset($_SESSION['mail_sent'])) {
            envoie_mail($Id_mail);
            $_SESSION['mail_sent'] = true;
        }
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
        if (!isset($_SESSION['mail_sent'])) {
            envoie_mail($Id_mail);
            $_SESSION['mail_sent'] = true;
        }
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
        if (!isset($_SESSION['mail_sent'])) {
            envoie_mail($Id_mail);
            $_SESSION['mail_sent'] = true;
        }
    }
    #endregion
    #endregion

    if(isset ($_SESSION['reponses'])){
        echo '<pre>';
        print_r($_SESSION['reponses']);
        echo '</pre>';
    }
}