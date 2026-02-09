<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/back' => [[['_route' => 'app_back', '_controller' => 'App\\Controller\\BackController::index'], null, null, null, false, false, null]],
        '/users' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\BackController::userIndex'], null, null, null, false, false, null]],
        '/back/publication' => [[['_route' => 'back_publication_index', '_controller' => 'App\\Controller\\BackPublicationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/back/publication/new' => [[['_route' => 'back_publication_new', '_controller' => 'App\\Controller\\BackPublicationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back/publication/stats' => [[['_route' => 'back_publication_stats', '_controller' => 'App\\Controller\\BackPublicationController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/back/publication/export/pdf' => [[['_route' => 'back_publication_export_pdf', '_controller' => 'App\\Controller\\BackPublicationController::exportPdf'], null, ['GET' => 0], null, false, false, null]],
        '/back/communication' => [[['_route' => 'back_communication_index', '_controller' => 'App\\Controller\\CommunicationController::index'], null, null, null, true, false, null]],
        '/back/communication/new' => [[['_route' => 'back_communication_new', '_controller' => 'App\\Controller\\CommunicationController::new'], null, null, null, false, false, null]],
        '/back/communication/search/advanced' => [[['_route' => 'back_communication_search_advanced', '_controller' => 'App\\Controller\\CommunicationController::searchAdvanced'], null, null, null, false, false, null]],
        '/back/communication/export/pdf' => [[['_route' => 'back_communication_export_pdf', '_controller' => 'App\\Controller\\CommunicationController::exportPdf'], null, null, null, false, false, null]],
        '/back/communication/statistics' => [[['_route' => 'back_communication_statistics', '_controller' => 'App\\Controller\\CommunicationController::statistics'], null, null, null, false, false, null]],
        '/front' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/back/(?'
                    .'|publication/(?'
                        .'|(\\d+)(*:36)'
                        .'|([^/]++)/(?'
                            .'|edit(*:59)'
                            .'|delete(*:72)'
                        .')'
                    .')'
                    .'|communication/(?'
                        .'|edit/([^/]++)(*:111)'
                        .'|show/([^/]++)(*:132)'
                        .'|delete/([^/]++)(*:155)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        36 => [[['_route' => 'back_publication_show', '_controller' => 'App\\Controller\\BackPublicationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        59 => [[['_route' => 'back_publication_edit', '_controller' => 'App\\Controller\\BackPublicationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        72 => [[['_route' => 'back_publication_delete', '_controller' => 'App\\Controller\\BackPublicationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        111 => [[['_route' => 'back_communication_edit', '_controller' => 'App\\Controller\\CommunicationController::edit'], ['id'], null, null, false, true, null]],
        132 => [[['_route' => 'back_communication_show', '_controller' => 'App\\Controller\\CommunicationController::show'], ['id'], null, null, false, true, null]],
        155 => [
            [['_route' => 'back_communication_delete', '_controller' => 'App\\Controller\\CommunicationController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
