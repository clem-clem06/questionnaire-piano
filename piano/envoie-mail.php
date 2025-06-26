<?php
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;
use Dotenv\Dotenv;

function envoie_mail($Id_mail)
{
    $dotenv = Dotenv::createImmutable(__DIR__, '.env.local');
    $dotenv->load();

    $dsn = $_ENV['MAILER_DSN'] ?? null;

    if (!$dsn) {
        die("MAILER_DSN non défini dans .env");
    }

    $transport = Transport::fromDsn($dsn);
    $mailer = new Mailer($transport);

    $nom = htmlspecialchars($_SESSION['reponses']['nom'] ?? 'Cher pianiste');
    $mail = htmlspecialchars($_SESSION['reponses']['mail'] ?? null);

    if (!$mail) {
        echo '<p class="message-erreur">Adresse mail non définie dans la session</p>';
        exit;
    }

    if ($Id_mail == 1) {
        $html = "<p>Bonjour <strong>{$nom}</strong>,</p>
        <p>Merci d’avoir répondu aux questions du quizz sur le site internet.</p>
        <p>Vos réponses me permettent de vous conseiller. Pour bien démarrer au piano sans perdre de temps, et pour vous faire plaisir rapidement, je vous conseille de rejoindre <strong>Les coulisses</strong>.</p>
        <p>C’est un abonnement mensuel, sans engagement, qui représente un investissement de <strong>49 €/mois</strong> ou <strong>500 €/an</strong>.</p>
        <p>
            <a href='https://virtuosopiano.fr/' style='
                display:inline-block;
                background-color:#bd9145;
                color:white;
                padding:12px 20px;
                border-radius:6px;
                text-decoration:none;
                font-weight:bold;
            '>Je rentre dans Les coulisses</a>
        </p>
        <p>On se retrouve là-bas !</p>
        <p>🎁 En attendant, je vous offre aujourd’hui une <strong>vidéo exclusive</strong> pour vous aider à progresser encore plus vite.</p>
        <p>Votre mentore piano,<br>Christine Jeandroz 🎹💖</p>";
    }

    if ($Id_mail == 2) {
        $html = "<p>Bonjour <strong>{$nom}</strong>,</p>
                <p>Merci d’avoir répondu aux questions du Quizz sur notre site internet.</p>
                <p>Selon vos réponses, j’ai compris que vous aimeriez un accompagnement de groupe et vous préférez les événements en personne plutôt que le digital, aussi je pense que les <strong>Évasions,</strong> les <strong>Masterclasses</strong> à Paris et dans d’autres villes, ainsi que la retraite 5* <strong>Le cercle du Silence</strong> sont les formats qui pourraient le plus vous convenir.</p>
                <p>Vous recevrez sous 48 heures une vidéo personnalisée de quelques minutes.</p>
                <p>À très bientôt,<br>Christine Jeandroz, votre mentore piano<br>🎹💖</p>";
    }

    if ($Id_mail == 3) {
        $html = "<p>Bonjour <strong>{$nom}</strong>,</p>
            <p>Merci d’avoir répondu aux questions du quiz sur le site internet.</p>
            <p>Vous recevrez sous 48 heures une vidéo de quelques minutes avec des conseils personnalisés.</p>
            <p>Je serai ravie de vous accompagner dans le développement de votre carrière. Nous verrons en détail vos objectifs lors d’un rendez-vous que vous pourrez réserver après la lecture de la vidéo.</p>
            <p>À très bientôt,<br>Christine Jeandroz, mentore piano<br>🎹💖</p>";
    }

    if ($Id_mail == 4) {
        $html = "<p>Bonjour <strong>{$nom}</strong>,</p>
        <p>Merci d’avoir répondu aux questions du quiz sur le site internet.</p>
        <p>Selon vos réponses, j’ai compris que vous aimeriez un accompagnement de groupe, et que vous préférez un format digital.</p>
        <p>Vous recevrez sous 48 heures une vidéo de quelques minutes avec des conseils personnalisés.</p>
        <p>Nous pourrons ensuite échanger plus en détail sur vos objectifs lors d’un rendez-vous que vous pourrez réserver après la lecture de la vidéo.</p>
        <p>À très bientôt,<br>Christine Jeandroz, mentore piano<br>🎹💖</p>";
    }

    if ($Id_mail == 5) {
        $html = "<p>Bonjour <strong>{$nom}</strong>,</p>
        <p>Merci d’avoir répondu aux questions du quiz sur le site internet.</p>
        <p>Selon vos réponses, j’ai compris que vous aimeriez un accompagnement individuel, et que vous préférez un format digital.</p>
        <p>Je pense donc que les <strong>cours 1:1 en visio</strong> ou le <strong>mentorat privé sur mesure La Résonance</strong> sont les formats qui pourraient le mieux vous convenir.</p>
        <p>Vous recevrez sous 48 heures une vidéo personnalisée de quelques minutes avec mes recommandations.</p>
        <p>Nous pourrons ensuite échanger plus en détail sur vos objectifs lors d’un rendez-vous que vous pourrez réserver après la lecture de la vidéo.</p>
        <p>À très bientôt,<br>Christine Jeandroz, mentore piano<br>🎹💖</p>";
    }

    if ($Id_mail == 6) {
        $html = "<p>Bonjour <strong>{$nom}</strong>,</p>
        <p>Merci d’avoir répondu aux questions du quiz sur le site internet.</p>
        <p>Selon vos réponses, j’ai compris que vous aimeriez un accompagnement individuel, et que vous privilégiez les événements en présentiel plutôt que le digital.</p>
        <p>Je pense donc que les <strong>stages individuels</strong> à Saulges, à Paris ou dans d’autres villes, ainsi que les <strong>voyages artistiques 1:1 “Initiation”</strong> sont les formats qui pourraient le mieux vous convenir.</p>
        <p>Vous recevrez sous 48 heures une vidéo personnalisée de quelques minutes avec mes recommandations.</p>
        <p>Nous pourrons ensuite échanger plus en détail sur vos objectifs lors d’un rendez-vous que vous pourrez réserver après la lecture de la vidéo.</p>
        <p>À très bientôt,<br>Christine Jeandroz, mentore piano<br>🎹💖</p>";
    }


    $html .= resume_reponse();

    $email = (new Email())
        ->from('tonadresse@mail.com')
        ->to($mail)
        ->subject('Votre profil pianistique 🎹')
        ->html($html);

    $mailer->send($email);
    http_response_code(200);
}