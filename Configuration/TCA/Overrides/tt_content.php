<?php

defined('TYPO3') || die();

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

call_user_func(
    static function (): void {
        ExtensionUtility::registerPlugin(
            'Measure',
            'MeasureIndex',
            'LLL:EXT:measure/Resources/Private/Language/locallang.xlf:plugin.measureIndex',
            'EXT:measure/Resources/Public/Icons/Extension.svg'
        );

        $GLOBALS['TCA']['tt_content']['types']['search']['subtypes_excludelist']['measure_measureindex'] = 'select_key,pages,recursive';
    }
);
