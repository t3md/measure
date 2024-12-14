<?php

use TYPO3\CMS\Core\Resource\File;
use TYPO3\CMS\Core\Utility\GeneralUtility;

$ll = 'LLL:EXT:measure/Resources/Private/Language/locallang_db.xlf:';

$tx_measure_domain_model_measure = [
	'ctrl' => [
		'title' =>  $ll . 'measure',
		'label' => 'title',
		'hideAtCopy' => true,
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'versioningWS' => true,
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'sortby' => 'sorting',
		'delete' => 'deleted',
		'enablecolumns' => [
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		],
		'searchFields' => 'title,shortdescription,aims,aimgroup,occupationalarea,finance,name,address,zip,city,person,phone,email,person2,phone2,email2,www1,www2,info',
		'iconfile' => 'EXT:measure/Resources/Public/Icons/measure.svg'
	],
	'types' => [
		'1' => ['showitem' => '
		--div--;LLL:EXT:measure/Resources/Private/Language/locallang_db.xlf:tab1,title, crdate, author, author_email, carrier, art, shortdescription, aims, aimgroup, occupationalarea,  info,
		--div--;LLL:EXT:measure/Resources/Private/Language/locallang_db.xlf:tab2, 
			--palette--;LLL:EXT:measure/Resources/Private/Language/locallang_db.xlf:age;pallete_eins,
			--palette--;;pallete_zwei,
			--palette--;;pallete_drei,
		--div--;LLL:EXT:measure/Resources/Private/Language/locallang_db.xlf:tab5,  
			--palette--;LLL:EXT:measure/Resources/Private/Language/locallang_db.xlf:tab7;pallete_vier,
			finance, 
			 name, address, zip, city, name2, address2, zip2, city2, file,
		--div--;LLL:EXT:measure/Resources/Private/Language/locallang_db.xlf:tab6, person1, phone1, email1, person2, phone2, email2, person3, phone3, email3, www1, www2,
		--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
			--palette--;;paletteLanguage,
		--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
			--palette--;;paletteHidden,
			--palette--;;paletteAccess,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.extended,',
		]
	],
		
	'palettes' => [
		'pallete_eins' => ['showitem' => 'agestart, ageend', 'canNotCollapse' => 1],
		'pallete_zwei' => ['showitem' => 'gender, migration, rights', 'canNotCollapse' => 1],
		'pallete_drei' => ['showitem' => 'school, graduate, ineducation', 'canNotCollapse' => 1],
		'pallete_vier' => ['showitem' => 'duration, startoffer, registration', 'canNotCollapse' => 1],		
		'paletteHidden' => ['showitem' => 'hidden',],
		'paletteAccess' => [
			'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access',
			'showitem' => '
			starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
				endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,
				--linebreak--,
				fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:fe_group_formlabel,
				--linebreak--,editlock
			',
		],
		'paletteLanguage' => [
			'showitem' => 'sys_language_uid,l10n_parent,',
		],
	],
	
	'columns' => [
		'sys_language_uid' => [
			'exclude' => true,
			'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
			'config' => [
				'type' => 'language',
			],
		],
		'l10n_parent' => [
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
			'config' => [
				'type' => 'group',
				'allowed' => 'tx_news_domain_model_news',
				'size' => 1,
				'maxitems' => 1,
				'minitems' => 0,
				'default' => 0,
			],
		],
		'l10n_source' => [
			'config' => [
				'type' => 'passthrough',
			],
		],
		'l10n_diffsource' => [
			'config' => [
				'type' => 'passthrough',
				'default' => '',
			],
		],
		'hidden' => [
			'exclude' => true,
			'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
			'config' => [
				'type' => 'check',
				'renderType' => 'checkboxToggle',
				'default' => 0,
				'items' => [
					['label' => '', 'value' => ''],
				],
			],
		],
		'crdate' => [
			'label' => 'crdate',
			'config' => [
				'type' => 'datetime',
			],
		],
		'tstamp' => [
			'label' => 'tstamp',
			'config' => [
				'type' => 'datetime',
			],
		],
		'starttime' => [
			'exclude' => true,
			'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel',
			'config' => [
				'type' => 'datetime',
			],
		],
		'endtime' => [
			'exclude' => true,
			'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel',
			'config' => [
				'type' => 'datetime',
			],
		],
		'title' => [
			'exclude' => true,
			'label' =>  $ll . 'title',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'default' => ''
			],
		],
		'art' => [
			'exclude' => true,
			'label' =>  $ll . 'art',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'items' => [
					[
						$ll . 'art.0',
						'0'
					],
					[
						$ll . 'art.1',
						'1'
					],
					[
						$ll . 'art.2',
						'2'
					],
					[
						$ll . 'art.3',
						'3'
					],
					[
						$ll . 'art.4',
						'4'
					],
					[
						$ll . 'art.5',
						'5'
					],
				],
				'size' => 5,
				'maxitems' => 1,
				'eval' => ''
			],
		],
		'shortdescription' => [
			'exclude' => true,
			'label' =>  $ll . 'shortdescription',
			'config' => [
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'default' => ''
			]
		],
		'aims' => [
			'exclude' => true,
			'label' =>  $ll . 'aims',
			'config' => [
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'default' => ''
			]
		],
		'aimgroup' => [
			'exclude' => true,
			'label' =>  $ll . 'aimgroup',
			'config' => [
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'default' => ''
			]
		],
		'occupationalarea' => [
			'exclude' => true,
			'label' =>  $ll . 'occupationalarea',
			'config' => [
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'default' => ''
			]
		],
		'agestart' => [
			'exclude' => true,
			'label' =>  $ll . 'agestart',
			'config' => [
				'type' => 'input',
				'size' => 4,
				'eval' => 'int',
				'default' => 0
			]
		],
		'ageend' => [
			'exclude' => true,
			'label' =>  $ll . 'ageend',
			'config' => [
				'type' => 'input',
				'size' => 4,
				'eval' => 'int',
				'default' => 0
			]
		],
		'gender' => [
			'exclude' => true,
			'label' =>  $ll . 'gender',
			'config' => [
				'type' => 'radio',
				'items'   => [
					[
						$ll . 'gender.1', 
						'1'
					],
					[
						$ll . 'gender.2', 
						'2'
					],
					[
						$ll . 'gender.0', 
						'0'
					],
				],   
			],  			
		],
		'migration' => [
			'exclude' => true,
			'label' =>  $ll . 'migration',
			'config' => [
				'type' => 'radio',
				'items'   => [
					[
						$ll . 'migration.0', 
						'0'
					],
					[
						$ll . 'migration.1', 
						'1'
					],
					[
						$ll . 'migration.2', 
						'2'
					],
				],   
			],  			
		],
		'rights' => [
			'exclude' => true,
		    'label' =>  $ll . 'rights',
			'config' => [
				'type' => 'radio',
				'items'   => [
					[
						$ll . 'rights.0', 
						'0'
					],
					[
						$ll . 'rights.1', 
						'1'
					],
					[
						$ll . 'rights.2', 
						'2'
					],
					[
						$ll . 'rights.3', 
						'3'
					],
				],   
			],  			
		],
		'school' => [
			'exclude' => true,
			'label' =>  $ll . 'school',
			'config' => [
				'type' => 'radio',
				'items'   => [
					[
						$ll . 'school.0', 
						'0'
					],
					[
						$ll . 'school.1', 
						'1'
					],
					[
						$ll . 'school.2', 
						'2'
					],
				], 
  			], 
		],
		'graduate' => [
			'exclude' => true,
			'label' =>  $ll . 'graduate',
			'config' => [
				'type' => 'radio',
				'items'   => [
					[
						$ll . 'graduate.0', 
						'0'
					],
					[
						$ll . 'graduate.1', 
						'1'
					],
					[
						$ll . 'graduate.2', 
						'2'
					],
					[
						$ll . 'graduate.3', 
						'3'
					],
					[
						$ll . 'graduate.4', 
						'4'
					],
					[
						$ll . 'graduate.5', 
						'5'
					],
				],   
			],
		],
		'ineducation' => [
			'exclude' => true,
			'label' =>  $ll . 'ineducation',
			'config' => [
				'type' => 'radio',
				'items'   => [
					[
						$ll . 'ineducation.0', 
						'0'
					],
					[
						$ll . 'ineducation.1', 
						'1'
					],
					[
						$ll . 'ineducation.2', 
						'2'
					],
				],   	
			],			
		],
		'duration' => [
			'exclude' => true,
			'label' =>  $ll . 'duration',
			'config' => [
				'type' => 'input',
				'size' => 10,
				'eval' => 'int',
				'default' => 0
			]
		],
		'startoffer' => [
			'exclude' => true,
			'label' =>  $ll . 'startoffer',
			'config' => [
				'dbType' => 'date',
				'type' => 'input',
				'renderType' => 'inputDateTime',
				'size' => 7,
				'eval' => 'date',
				'default' => null,
			],
		],
		'registration' => [
			'exclude' => true,
			'label' =>  $ll . 'registration',
			'config' => [
				'dbType' => 'date',
				'type' => 'input',
				'renderType' => 'inputDateTime',
				'size' => 7,
				'eval' => 'date',
				'default' => null,
			],
		],
		'finance' => [
			'exclude' => true,
			'label' =>  $ll . 'finance',
			'config' => [
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'default' => ''
			]
		],
		'name' => [
			'exclude' => true,
			'label' =>  $ll . 'name',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'default' => ''
			],
		],
		'address' => [
			'exclude' => true,
			'label' =>  $ll . 'address',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'default' => ''
			],
		],
		'zip' => [
			'exclude' => true,
			'label' =>  $ll . 'zip',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'default' => ''
			],
		],
		'city' => [
			'exclude' => true,
			'label' =>  $ll . 'city',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'default' => ''
			],
		],
		'person1' => [
			'exclude' => true,
			'label' =>  $ll . 'person1',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'default' => ''
			],
		],
		'phone1' => [
			'exclude' => true,
			'label' =>  $ll . 'phone1',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'default' => ''
			],
		],
		'email1' => [
			'exclude' => true,
			'label' =>  $ll . 'email1',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'default' => ''
			],
		],
		'person2' => [
			'exclude' => true,
			'label' =>  $ll . 'person2',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'default' => ''
			],
		],
		'phone2' => [
			'exclude' => true,
			'label' =>  $ll . 'phone2',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'default' => ''
			],
		],
		'email2' => [
			'exclude' => true,
			'label' =>  $ll . 'email2',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'default' => ''
			],
		],
		'www1' => [
			'exclude' => true,
			'label' =>  $ll . 'www1',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'default' => ''
			],
		],
		'www2' => [
			'exclude' => true,
			'label' =>  $ll . 'www2',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'default' => ''
			],
		],
		'file' => [
			'exclude' => true,
			'label' =>  $ll . 'file',
			'config' => [
				'type' => 'file',
				'behaviour' => [
					'allowLanguageSynchronization' => true,
				],
				'appearance' => [
					'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.addFileReference',
					'showPossibleLocalizationRecords' => true,
					'showAllLocalizationLink' => true,
					'showSynchronizationLink' => true,
				],
				'overrideChildTca' => [
					'types' => [
						File::FILETYPE_UNKNOWN => [
							'showitem' => '
								--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
								--palette--;;imageoverlayPalette,
								--palette--;;filePalette',
						],
						File::FILETYPE_TEXT => [
							'showitem' => '
								--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
								--palette--;;imageoverlayPalette,
								--palette--;;filePalette',
						],
						File::FILETYPE_IMAGE => [
							'showitem' => '
								--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
								--palette--;;imageoverlayPalette,
								--palette--;;filePalette',
						],
						File::FILETYPE_AUDIO => [
							'showitem' => '
								--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
								--palette--;;audioOverlayPalette,
								--palette--;;filePalette',
						],
						File::FILETYPE_VIDEO => [
							'showitem' => '
								--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
								--palette--;;videoOverlayPalette,
								--palette--;;filePalette',
						],
						File::FILETYPE_APPLICATION => [
							'showitem' => '
								--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
								--palette--;;imageoverlayPalette,
								--palette--;;filePalette',
						],
					],
				],
				'allowed' => 'common-media-types',
			],
		],
		'info' => [
			'exclude' => true,
			'label' =>  $ll . 'info',
			'config' => [
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'default' => ''
			]
		],
		'carrier' => [
			'exclude' => true,
			'label' =>  $ll . 'carrier',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingleBox',
				'foreign_table' => 'tx_measure_domain_model_carrier',
				'MM' => 'tx_measure_measure_carrier_mm',
			],
			
		],
	
	],
];

return $tx_measure_domain_model_measure;
