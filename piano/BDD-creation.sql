DROP DATABASE IF EXISTS piano;
CREATE DATABASE piano;
USE piano;

-- 1. Infos utilisateur (nom, mail, date de soumission)
CREATE TABLE utilisateur (
                             id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                             nom VARCHAR(255) NOT NULL,
                             mail VARCHAR(255) NOT NULL,
                             date DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- 2. Questions
CREATE TABLE question (
                          id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                          identifiant VARCHAR(50) NOT NULL UNIQUE,
                          type ENUM('choix', 'texte', 'checkbox', 'textarea') NOT NULL,
                          ordre INT UNSIGNED
);

-- 3. Réponses possibles (pour questions de type choix/checkbox)
CREATE TABLE reponse_possible (
                                  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                  question_id INT UNSIGNED NOT NULL,
                                  valeur VARCHAR(255) NOT NULL,
                                  label_affiche TEXT NOT NULL,
                                  FOREIGN KEY (question_id) REFERENCES question(id) ON DELETE CASCADE
);

-- 4. Réponses utilisateur (1 ligne = 1 réponse à 1 question, textuelle ou choix)
CREATE TABLE reponse_utilisateur (
                                     id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                     utilisateur_id BIGINT UNSIGNED NOT NULL,
                                     question_id INT UNSIGNED NOT NULL,
                                     valeur TEXT,
                                     FOREIGN KEY (utilisateur_id) REFERENCES utilisateur(id) ON DELETE CASCADE,
                                     FOREIGN KEY (question_id) REFERENCES question(id) ON DELETE CASCADE
);

-- 5. Réponses multiples (si question type checkbox)
CREATE TABLE reponse_utilisateur_multiple (
                                              id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                              reponse_id BIGINT UNSIGNED NOT NULL,
                                              utilisateur_id BIGINT UNSIGNED NOT NULL,
                                              valeur VARCHAR(255) NOT NULL,
                                              FOREIGN KEY (reponse_id) REFERENCES reponse_utilisateur(id) ON DELETE CASCADE,
                                              FOREIGN KEY (utilisateur_id) REFERENCES utilisateur(id) ON DELETE CASCADE
);

-- 6. Données initiales (questions)
INSERT INTO question (identifiant, type, ordre) VALUES
                                                    ('nom', 'texte', 0),
                                                    ('mail', 'texte', 1),
                                                    ('pianiste', 'choix', 2),
                                                    ('piano', 'choix', 3),
                                                    ('pro/am', 'choix', 4),
                                                    ('instrument', 'texte', 5),
                                                    ('motivation', 'textarea', 6),
                                                    ('experience', 'texte', 7),
                                                    ('problematiques', 'checkbox', 8),
                                                    ('accompagnement', 'choix', 9),
                                                    ('format', 'choix', 10),
                                                    ('academie', 'texte', 11),
                                                    ('pourquoi', 'textarea', 12),
                                                    ('prof', 'choix', 13),
                                                    ('style', 'choix', 14),
                                                    ('autre', 'textarea', 15);