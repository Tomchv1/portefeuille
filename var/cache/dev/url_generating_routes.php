<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'enseignant' => [[], ['_controller' => 'App\\Controller\\EnseignantController::index'], [], [['text', '/enseignant']], [], []],
    'etudiant2' => [[], ['_controller' => 'App\\Controller\\EtudiantController::index'], [], [['text', '/etudiant']], [], []],
    'r_p' => [[], ['_controller' => 'App\\Controller\\RPController::index'], [], [['text', '/r/p']], [], []],
    'stage' => [[], ['_controller' => 'App\\Controller\\StageController::index'], [], [['text', '/stage']], [], []],
    'etudiantAjouter' => [[], ['_controller' => 'App\\Controller\\EtudiantController::ajouterEtudiant'], [], [['text', '/etudiant/ajouter']], [], []],
    'rpAjouter' => [[], ['_controller' => 'App\\Controller\\RPController::ajouterRp'], [], [['text', '/rp/ajouter']], [], []],
    'stageAjouter' => [[], ['_controller' => 'App\\Controller\\StageController::ajouterStage'], [], [['text', '/stage/ajouter']], [], []],
    'enseignantAjouter' => [[], ['_controller' => 'App\\Controller\\EnseignantController::ajouterEnseignant'], [], [['text', '/enseignant/ajouter']], [], []],
];
