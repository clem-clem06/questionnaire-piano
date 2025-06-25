<?php

foreach (glob(__DIR__ . '/R*.php') as $fichier) {
    require_once $fichier;
}