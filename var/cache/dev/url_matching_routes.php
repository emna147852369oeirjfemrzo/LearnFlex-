<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
        '/' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/front' => [[['_route' => 'app_front_old', '_controller' => 'App\\Controller\\FrontController::frontOld'], null, null, null, false, false, null]],
        '/forum' => [[['_route' => 'forum_index', '_controller' => 'App\\Controller\\FrontController::forum'], null, null, null, false, false, null]],
        '/forum/publication/new' => [[['_route' => 'forum_publication_new', '_controller' => 'App\\Controller\\FrontController::newPublication'], null, null, null, false, false, null]],
        '/forum/communication' => [[['_route' => 'forum_communication_index', '_controller' => 'App\\Controller\\FrontController::communicationIndex'], null, ['GET' => 0], null, false, false, null]],
        '/forum/communication/new' => [[['_route' => 'forum_communication_new', '_controller' => 'App\\Controller\\FrontController::newCommunication'], null, null, null, false, false, null]],
        '/forum/chat' => [[['_route' => 'communication_chat', '_controller' => 'App\\Controller\\FrontController::chat'], null, null, null, false, false, null]],
        '/check-messages' => [[['_route' => 'check_messages', '_controller' => 'App\\Controller\\FrontController::checkMessages'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/back/(?'
                    .'|publication/(?'
                        .'|(\\d+)(*:231)'
                        .'|([^/]++)/(?'
                            .'|edit(*:255)'
                            .'|delete(*:269)'
                        .')'
                    .')'
                    .'|communication/(?'
                        .'|edit/([^/]++)(*:309)'
                        .'|show/([^/]++)(*:330)'
                        .'|delete/([^/]++)(*:353)'
                    .')'
                .')'
                .'|/forum/(?'
                    .'|publication/(\\d+)(*:390)'
                    .'|communication/(?'
                        .'|(\\d+)(*:420)'
                        .'|(\\d+)/edit(*:438)'
                        .'|(\\d+)/delete(*:458)'
                        .'|(\\d+)/join(*:476)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        231 => [[['_route' => 'back_publication_show', '_controller' => 'App\\Controller\\BackPublicationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        255 => [[['_route' => 'back_publication_edit', '_controller' => 'App\\Controller\\BackPublicationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        269 => [[['_route' => 'back_publication_delete', '_controller' => 'App\\Controller\\BackPublicationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        309 => [[['_route' => 'back_communication_edit', '_controller' => 'App\\Controller\\CommunicationController::edit'], ['id'], null, null, false, true, null]],
        330 => [[['_route' => 'back_communication_show', '_controller' => 'App\\Controller\\CommunicationController::show'], ['id'], null, null, false, true, null]],
        353 => [[['_route' => 'back_communication_delete', '_controller' => 'App\\Controller\\CommunicationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        390 => [[['_route' => 'forum_publication_show', '_controller' => 'App\\Controller\\FrontController::showPublication'], ['id'], null, null, false, true, null]],
        420 => [[['_route' => 'forum_communication_show', '_controller' => 'App\\Controller\\FrontController::showCommunication'], ['id'], ['GET' => 0], null, false, true, null]],
        438 => [[['_route' => 'forum_communication_edit', '_controller' => 'App\\Controller\\FrontController::editCommunication'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        458 => [[['_route' => 'forum_communication_delete', '_controller' => 'App\\Controller\\FrontController::deleteCommunication'], ['id'], ['POST' => 0], null, false, false, null]],
        476 => [
            [['_route' => 'forum_communication_join', '_controller' => 'App\\Controller\\FrontController::joinCommunication'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
