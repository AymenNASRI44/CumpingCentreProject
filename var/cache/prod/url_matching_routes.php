<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/lieu(?'
                    .'|/([^/]++)(?'
                        .'|(*:27)'
                        .'|/avis(*:39)'
                    .')'
                    .'|camping/([^/]++)(?'
                        .'|(*:66)'
                        .'|/edit(*:78)'
                        .'|(*:85)'
                    .')'
                .')'
                .'|/reservation/(?'
                    .'|(\\d+)(*:115)'
                    .'|crud/([^/]++)(?'
                        .'|(*:139)'
                        .'|/edit(*:152)'
                        .'|(*:160)'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:187)'
                    .'|/edit(*:200)'
                    .'|(*:208)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'app_lieu_camping_detail', '_controller' => 'App\\Controller\\LieuCampingContlollerController::detail'], ['id'], null, null, false, true, null]],
        39 => [[['_route' => 'app_avis', '_controller' => 'App\\Controller\\LieuCampingContlollerController::donnerAvis'], ['id'], null, null, false, false, null]],
        66 => [[['_route' => 'app_lieucamping_show', '_controller' => 'App\\Controller\\LieucampingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        78 => [[['_route' => 'app_lieucamping_edit', '_controller' => 'App\\Controller\\LieucampingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        85 => [[['_route' => 'app_lieucamping_delete', '_controller' => 'App\\Controller\\LieucampingController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        115 => [[['_route' => 'app_reservation', '_controller' => 'App\\Controller\\ReservationController::reservation'], ['id'], null, null, false, true, null]],
        139 => [[['_route' => 'app_reservation_crud_show', '_controller' => 'App\\Controller\\ReservationCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        152 => [[['_route' => 'app_reservation_crud_edit', '_controller' => 'App\\Controller\\ReservationCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        160 => [[['_route' => 'app_reservation_crud_delete', '_controller' => 'App\\Controller\\ReservationCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        187 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        200 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        208 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
