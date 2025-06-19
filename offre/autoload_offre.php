<?php

foreach (glob(__DIR__ . '/O*.php') as $fichier) {
    require_once $fichier;
}
