<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/add-email' => [[['_route' => 'add_email', '_controller' => 'App\\Controller\\FunctionController::addEmail'], null, ['POST' => 0], null, false, false, null]],
        '/select_m' => [[['_route' => 'motos_par_marque', '_controller' => 'App\\Controller\\FunctionController::motosParMarque'], null, ['POST' => 0], null, false, false, null]],
        '/select_a' => [[['_route' => 'motos_all', '_controller' => 'App\\Controller\\FunctionController::motosAll'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_accueil', '_controller' => 'App\\Controller\\PageController::index'], null, null, null, false, false, null]],
        '/catalogue' => [[['_route' => 'catalogue', '_controller' => 'App\\Controller\\PageController::catalogue'], null, null, null, false, false, null]],
        '/occasion' => [[['_route' => 'app_occasion', '_controller' => 'App\\Controller\\PageController::occasion'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/occasion/([^/]++)(*:25)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        25 => [
            [['_route' => 'app_detail_occasion', '_controller' => 'App\\Controller\\PageController::detail_occasion'], ['moto_id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
