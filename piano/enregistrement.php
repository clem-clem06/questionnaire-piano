<?php
function enregistrement(): bool
{
    if (!isset($_SESSION['reponses'])) {
        $_SESSION['reponses'] = [];
    }

    $saved = false;
    $fields = ['nom', 'mail', 'pianiste', 'piano', 'pro/am', 'instrument', 'motivation', 'experience', 'problematiques', 'accompagnement', 'format', 'academie', 'pourquoi', 'prof', 'style', 'autre'];

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            $value = $_POST[$field];

            if (is_array($value)) {
                $cleaned = array_filter($value, fn($v) => is_scalar($v));
                $_SESSION['reponses'][$field] = $cleaned;
            } elseif (is_scalar($value)) {
                $_SESSION['reponses'][$field] = trim($value);
            }

            $saved = true;
        }
    }
    return $saved;
}