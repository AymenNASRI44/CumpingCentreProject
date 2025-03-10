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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/statistics' => [[['_route' => 'admin_statistics', '_controller' => 'App\\Controller\\Admin\\StatisticsController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/lieu' => [
            [['_route' => 'app_lieu_camping', '_controller' => 'App\\Controller\\LieuCampingContlollerController::index'], null, null, null, false, false, null],
            [['_route' => 'camping_centre', '_controller' => 'App\\Controller\\LieuCampingContlollerController::index'], null, null, null, false, false, null],
        ],
        '/lieucamping' => [[['_route' => 'app_lieucamping_index', '_controller' => 'App\\Controller\\LieucampingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/lieucamping/new' => [[['_route' => 'app_lieucamping_new', '_controller' => 'App\\Controller\\LieucampingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reservation/crud' => [[['_route' => 'app_reservation_crud_index', '_controller' => 'App\\Controller\\ReservationCrudController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/crud/new' => [[['_route' => 'app_reservation_crud_new', '_controller' => 'App\\Controller\\ReservationCrudController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/test/controller1' => [[['_route' => 'app_test_controller1', '_controller' => 'App\\Controller\\TestController1Controller::index'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/lieu(?'
                    .'|/([^/]++)(?'
                        .'|(*:189)'
                        .'|/avis(*:202)'
                    .')'
                    .'|camping/([^/]++)(?'
                        .'|(*:230)'
                        .'|/edit(*:243)'
                        .'|(*:251)'
                    .')'
                .')'
                .'|/reservation/(?'
                    .'|(\\d+)(*:282)'
                    .'|crud/([^/]++)(?'
                        .'|(*:306)'
                        .'|/edit(*:319)'
                        .'|(*:327)'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:354)'
                    .'|/edit(*:367)'
                    .'|(*:375)'
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
        189 => [[['_route' => 'app_lieu_camping_detail', '_controller' => 'App\\Controller\\LieuCampingContlollerController::detail'], ['id'], null, null, false, true, null]],
        202 => [[['_route' => 'app_avis', '_controller' => 'App\\Controller\\LieuCampingContlollerController::donnerAvis'], ['id'], null, null, false, false, null]],
        230 => [[['_route' => 'app_lieucamping_show', '_controller' => 'App\\Controller\\LieucampingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        243 => [[['_route' => 'app_lieucamping_edit', '_controller' => 'App\\Controller\\LieucampingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        251 => [[['_route' => 'app_lieucamping_delete', '_controller' => 'App\\Controller\\LieucampingController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        282 => [[['_route' => 'app_reservation', '_controller' => 'App\\Controller\\ReservationController::reservation'], ['id'], null, null, false, true, null]],
        306 => [[['_route' => 'app_reservation_crud_show', '_controller' => 'App\\Controller\\ReservationCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        319 => [[['_route' => 'app_reservation_crud_edit', '_controller' => 'App\\Controller\\ReservationCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        327 => [[['_route' => 'app_reservation_crud_delete', '_controller' => 'App\\Controller\\ReservationCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        354 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        367 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        375 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
