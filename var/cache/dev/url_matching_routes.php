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
        '/account' => [[['_route' => 'app_account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
        '/admin/reservation' => [[['_route' => 'app_admin_reservation_index', '_controller' => 'App\\Controller\\AdminReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation', '_controller' => 'App\\Controller\\ReservationController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin_reservation/delete_confirmation' => [[['_route' => 'admin_reservation_delete_confirmation', 'template' => 'admin_reservation/delete_confirmation.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, null, null, false, false, null]],
        '/admin_reservation/update_confirmation' => [[['_route' => 'admin_reservation_update_confirmation', 'template' => 'admin_reservation/update_confirmation.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/reservation/(?'
                    .'|([^/]++)(*:199)'
                    .'|new(*:210)'
                    .'|([^/]++)(?'
                        .'|(*:229)'
                        .'|/edit(*:242)'
                        .'|(*:250)'
                    .')'
                    .'|select(*:265)'
                .')'
                .'|/re(?'
                    .'|gister/([^/]++)/edit(*:300)'
                    .'|servation/(?'
                        .'|([^/]++)/edit(*:334)'
                        .'|confirm/([^/]++)(*:358)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        199 => [[['_route' => 'app_admin_reservation_select', '_controller' => 'App\\Controller\\AdminReservationController::select'], ['date'], ['GET' => 0], null, false, true, null]],
        210 => [[['_route' => 'app_admin_reservation_new', '_controller' => 'App\\Controller\\AdminReservationController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        229 => [[['_route' => 'app_admin_reservation_show', '_controller' => 'App\\Controller\\AdminReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        242 => [[['_route' => 'app_admin_reservation_edit', '_controller' => 'App\\Controller\\AdminReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        250 => [[['_route' => 'app_admin_reservation_delete', '_controller' => 'App\\Controller\\AdminReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        265 => [[['_route' => 'app_admin_reservation_index_select', '_controller' => 'App\\Controller\\AdminReservationController::select'], [], ['GET' => 0], null, false, false, null]],
        300 => [[['_route' => 'app_register_edit', '_controller' => 'App\\Controller\\RegistrationController::updateAccount'], ['id'], null, null, false, false, null]],
        334 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::editReservation'], ['id'], null, null, false, false, null]],
        358 => [
            [['_route' => 'app_reservation_confirm', '_controller' => 'App\\Controller\\ReservationController::confirmUpdate'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
