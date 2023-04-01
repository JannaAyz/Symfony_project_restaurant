<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_account' => [[], ['_controller' => 'App\\Controller\\AccountController::index'], [], [['text', '/account']], [], [], []],
    'app_admin_reservation_index' => [[], ['_controller' => 'App\\Controller\\AdminReservationController::index'], [], [['text', '/admin/reservation/']], [], [], []],
    'app_admin_reservation_select' => [['date'], ['_controller' => 'App\\Controller\\AdminReservationController::select'], [], [['variable', '/', '[^/]++', 'date', true], ['text', '/admin/reservation']], [], [], []],
    'app_admin_reservation_new' => [[], ['_controller' => 'App\\Controller\\AdminReservationController::new'], [], [['text', '/admin/reservation/new']], [], [], []],
    'app_admin_reservation_show' => [['id'], ['_controller' => 'App\\Controller\\AdminReservationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/reservation']], [], [], []],
    'app_admin_reservation_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminReservationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/reservation']], [], [], []],
    'app_admin_reservation_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminReservationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/reservation']], [], [], []],
    'app_contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_register_edit' => [['id'], ['_controller' => 'App\\Controller\\RegistrationController::updateAccount'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/register']], [], [], []],
    'app_reservation' => [[], ['_controller' => 'App\\Controller\\ReservationController::index'], [], [['text', '/reservation']], [], [], []],
    'app_reservation_edit' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::editReservation'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], [], []],
    'app_reservation_confirm' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::confirmUpdate'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation/confirm']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_admin_reservation_index_select' => [[], ['_controller' => 'App\\Controller\\AdminReservationController::select'], [], [['text', '/admin/reservation/select']], [], [], []],
];
