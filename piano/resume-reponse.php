<?php
function resume_reponse(): string {
    $reponses = $_SESSION['reponses'] ?? [];
    $texte = "<h2>🎹 Résumé de vos réponses :</h2><ul>";

    $questions = [
        'pianiste' => 'Êtes-vous pianiste ?',
        'piano' => 'Quel type de piano possédez-vous ?',
        'pro/am' => 'Êtes-vous pianiste amateur ou professionnel ?',
        'instrument' => 'Quel est votre instrument principal ?',
        'experience' => 'Quelle est votre expérience au piano ?',
        'accompagnement' => 'Quel type d’accompagnement recherchez-vous ?',
        'format' => 'Quel format préférez-vous pour apprendre ?',
        'academie' => 'Êtes-vous intéressé(e) par l’Académie ?',
        'prof' => 'Êtes-vous professeur ?',
        'problematiques' => 'Quelles problématiques rencontrez-vous actuellement au piano ?',
        'pourquoi' => 'Pour quelle(s) raison(s) l’Académie ne vous intéresse pas ?',
        'style' => 'Quel style de musique aimez-vous jouer ?',
        'motivation' => 'Quelle est votre motivation pour jouer du piano ?',
        'autre' => 'Avez-vous d’autres informations à me faire passer ?'
    ];

    $labels = [
        'pianiste' => [
            1 => 'Oui, je suis pianiste',
            2 => 'Non, je ne suis pas pianiste'
        ],
        'piano' => [
            1 => 'Acoustique',
            2 => 'Numérique',
            3 => 'Je ne possède pas de piano'
        ],
        'pro/am' => [
            1 => 'Amateur',
            2 => 'Professionnel'
        ],
        'instrument' => [
            1 => 'Acoustique',
            2 => 'Numérique',
            3 => 'Je ne sais pas'
        ],
        'experience' => [
            1 => 'Moins de 5 ans',
            2 => 'Entre 5 et 10 ans',
            3 => 'Plus de 10 ans'
        ],
        'accompagnement' => [
            1 => 'En groupe',
            2 => 'Individuel'
        ],
        'format' => [
            1 => 'Digital',
            2 => 'En personne'
        ],
        'academie' => [
            1 => 'Oui',
            2 => 'Non'
        ],
        'prof' => [
            1 => 'Oui, dans un établissement public',
            2 => 'Oui, en privé',
            3 => 'Non'
        ],
        'problematiques' => [
            1 => 'Le toucher',
            2 => 'La technique',
            3 => "J'ai des douleurs quand je joue",
            4 => 'Les méthodes de travail',
            5 => "L'interprétation",
            6 => 'La gestion du jeu en public',
            7 => 'Le son',
            8 => "L'expression",
            9 => 'La mémorisation',
            10 => 'La vision professionnelle',
            11 => "L'improvisation",
            12 => 'La pédagogie',
            13 => 'Autre(s) problématique(s)'
        ],
        'pourquoi' => [
            1 => "Je ne me sens pas du niveau",
            2 => "Je n'ai pas le budget nécessaire",
            3 => "Je n'ai pas le temps",
            4 => "Autre(s) raison(s)"
        ],
        'style' => [
            1 => 'Jazz',
            2 => 'Classique',
            3 => 'Autre'
        ],
        'autre' => [
            1 => 'Non',
            2 => 'Oui'
        ]
    ];

    foreach ($reponses as $key => $val) {
        if (!isset($questions[$key])) continue;

        $texte .= "<li><strong>{$questions[$key]} :</strong> ";

        if (is_array($val)) {
            $textes = [];
            foreach ($val as $v) {
                if (isset($labels[$key][$v])) {
                    $textes[] = $labels[$key][$v];
                } elseif (!empty($v) && !is_numeric($v)) {
                    $textes[] = htmlspecialchars($v);
                }
            }

            if (!empty($textes)) {
                $texte .= implode(', ', $textes);
            } else {
                $texte .= '(aucune réponse)';
            }
        } else {
            if (isset($labels[$key][$val])) {
                $texte .= $labels[$key][$val];
            } else {
                $texte .= htmlspecialchars($val);
            }
        }

        $texte .= "</li>";
    }

    $texte .= "</ul>";
    return $texte;
}