<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = [
    'id'          => 'fcprofitmargin',
    'title'       => [
        'de' => 'Gewinnberechnung',
        'en' => 'Profit calculation'
    ],
    'description' => [
        'de' => 'Platzhalter',
        'en' => 'placeholder'
    ],
    'version'     => '1.0.0',
    'author'      => 'FC-Sebastian',
    'blocks'      => [
        [
            'template' => 'article_main.tpl',
            'block'    => 'admin_article_main_form',
            'file'     => 'admin_article_main_form.tpl'
        ],
        [
            'template' => 'article_list.tpl',
            'block'    => 'admin_article_list_item',
            'file'     => 'admin_article_list_item.tpl'
        ]
    ],
    'extend' => [
        OxidEsales\Eshop\Application\Model\Article::class => Fatchip\ProfitMargin\extend\Application\Model\Article::class
    ],
    'events'      => [
    ],
    'controllers' => [
    ]
];