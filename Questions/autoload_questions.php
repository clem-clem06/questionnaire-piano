<?php

foreach (glob(__DIR__ . '/Q*.php') as $fichier) {
    require_once $fichier;
}
