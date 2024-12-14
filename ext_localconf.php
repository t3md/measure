<?php

declare(strict_types=1);

use T3md\Measure\Controller\MeasureController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die('Access denied.');

call_user_func(static function() {
    ExtensionUtility::configurePlugin(
        'Measure',
        'MeasureIndex',
        [
            MeasureController::class => 'search,show',
        ],
        [
            MeasureController::class => 'search,show',
        ]
    );
});