<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/product' => [[['_route' => 'create_product', '_controller' => 'App\\Controller\\ProductController::createProduct'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/product/(?'
                    .'|([^/]++)(*:62)'
                    .'|edit/([^/]++)(*:82)'
                .')'
                .'|/logger/([^/]++)(*:106)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        62 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], null, null, false, true, null]],
        82 => [[['_route' => 'app_product_update', '_controller' => 'App\\Controller\\ProductController::update'], ['id'], null, null, false, true, null]],
        106 => [
            [['_route' => 'api_logger_log', '_controller' => 'App\\Controller\\LogController::logger'], ['name'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
