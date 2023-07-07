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
        ],
        [
            'template' => 'article_list.tpl',
            'block'    => 'admin_article_list_colgroup',
            'file'     => 'admin_article_list_colgroup.tpl'
        ],
        [
            'template' => 'widget/product/listitem_infogrid.tpl',
            'block'    => 'widget_product_listitem_infogrid_price',
            'file'     => 'widget_product_listitem_infogrid_price.tpl'
        ],
        [
            'template' => 'widget/product/listitem_grid.tpl',
            'block'    => 'widget_product_listitem_grid_price',
            'file'     => 'widget_product_listitem_grid_price.tpl'
        ],
        [
            'template' => 'widget/product/listitem_line.tpl',
            'block'    => 'widget_product_listitem_line_price',
            'file'     => 'widget_product_listitem_line_price.tpl'
        ]
    ],
    'extend' => [
        OxidEsales\Eshop\Application\Model\Article::class => Fatchip\ProfitMargin\extend\Application\Model\Article::class
    ],
    'controllers' => [
        'fc_profitMargin_widgetcontroller' => \Fatchip\ProfitMargin\Application\Component\Widget\FcProfitWidgetController::class
    ],
    'templates' => [
        'profitMargin.tpl' => 'fc/fcprofitmargin/Application/views/frontend/tpl/widget/profitMargin.tpl'
    ]
];