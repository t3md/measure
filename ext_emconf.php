<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Measure Extension',
    'description' => 'Extension for BO-Suedhessen',
    'version' => '1.0.0',
    'category' => 'frontend',
    'constraints' => [
        'depends' => [
            'php' => '8.3-',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'author' => 'Michael Lang',
    'author_email' => 'info@mediadesign-ffm.de',
    'author_company' => 'Mediadesign',
    'autoload' => [
        'psr-4' => [
            'T3md\\Measure\\' => 'Classes/',
        ],
    ],
];
