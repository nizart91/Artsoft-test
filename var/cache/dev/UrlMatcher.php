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
        '/api/authors' => [[['_route' => 'api_app_api_author_getauthor', '_controller' => 'App\\Controller\\Api\\AuthorController::getAuthorAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/author' => [[['_route' => 'api_app_api_author_postauthor', '_controller' => 'App\\Controller\\Api\\AuthorController::postAuthorAction'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'author', '_controller' => 'App\\Controller\\AuthorController::index'], null, null, null, false, false, null]],
        '/author/create' => [[['_route' => 'create_author', '_controller' => 'App\\Controller\\AuthorController::create'], null, null, null, false, false, null]],
        '/book' => [[['_route' => 'book', '_controller' => 'App\\Controller\\BookController::index'], null, null, null, false, false, null]],
        '/book/create' => [[['_route' => 'create_book', '_controller' => 'App\\Controller\\BookController::create'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'sonata_admin_redirect', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sonata_admin_dashboard', 'permanent' => 'true'], null, null, null, true, false, null]],
        '/admin/dashboard' => [[['_route' => 'sonata_admin_dashboard', '_controller' => 'Sonata\\AdminBundle\\Action\\DashboardAction'], null, null, null, false, false, null]],
        '/admin/core/get-form-field-element' => [[['_route' => 'sonata_admin_retrieve_form_element', '_controller' => 'sonata.admin.action.retrieve_form_field_element'], null, null, null, false, false, null]],
        '/admin/core/append-form-field-element' => [[['_route' => 'sonata_admin_append_form_element', '_controller' => 'sonata.admin.action.append_form_field_element'], null, null, null, false, false, null]],
        '/admin/core/set-object-field-value' => [[['_route' => 'sonata_admin_set_object_field_value', '_controller' => 'sonata.admin.action.set_object_field_value'], null, null, null, false, false, null]],
        '/admin/search' => [[['_route' => 'sonata_admin_search', '_controller' => 'Sonata\\AdminBundle\\Action\\SearchAction'], null, null, null, false, false, null]],
        '/admin/core/get-autocomplete-items' => [[['_route' => 'sonata_admin_retrieve_autocomplete_items', '_controller' => 'sonata.admin.action.retrieve_autocomplete_items'], null, null, null, false, false, null]],
        '/admin/app/author/list' => [[['_route' => 'admin_app_author_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'App\\Admin\\AuthorAdmin', '_sonata_name' => 'admin_app_author_list'], null, null, null, false, false, null]],
        '/admin/app/author/create' => [[['_route' => 'admin_app_author_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'App\\Admin\\AuthorAdmin', '_sonata_name' => 'admin_app_author_create'], null, null, null, false, false, null]],
        '/admin/app/author/batch' => [[['_route' => 'admin_app_author_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'App\\Admin\\AuthorAdmin', '_sonata_name' => 'admin_app_author_batch'], null, null, null, false, false, null]],
        '/admin/app/author/export' => [[['_route' => 'admin_app_author_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'App\\Admin\\AuthorAdmin', '_sonata_name' => 'admin_app_author_export'], null, null, null, false, false, null]],
        '/admin/app/book/list' => [[['_route' => 'admin_app_book_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'App\\Admin\\BookAdmin', '_sonata_name' => 'admin_app_book_list'], null, null, null, false, false, null]],
        '/admin/app/book/create' => [[['_route' => 'admin_app_book_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'App\\Admin\\BookAdmin', '_sonata_name' => 'admin_app_book_create'], null, null, null, false, false, null]],
        '/admin/app/book/batch' => [[['_route' => 'admin_app_book_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'App\\Admin\\BookAdmin', '_sonata_name' => 'admin_app_book_batch'], null, null, null, false, false, null]],
        '/admin/app/book/export' => [[['_route' => 'admin_app_book_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'App\\Admin\\BookAdmin', '_sonata_name' => 'admin_app_book_export'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|uthor(?'
                        .'|/(?'
                            .'|single/([^/]++)(*:201)'
                            .'|update/([^/]++)(*:224)'
                            .'|delete/([^/]++)(*:247)'
                        .')'
                        .'|s(?:\\.(json|xml|html))?(*:279)'
                        .'|(?:\\.(json|xml|html))?(*:309)'
                    .')'
                    .'|dmin/(?'
                        .'|core/get\\-short\\-object\\-description(?:\\.(html|json))?(*:380)'
                        .'|app/(?'
                            .'|author/([^/]++)/(?'
                                .'|edit(*:418)'
                                .'|delete(*:432)'
                                .'|show(*:444)'
                            .')'
                            .'|book/([^/]++)/(?'
                                .'|edit(*:474)'
                                .'|delete(*:488)'
                                .'|show(*:500)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/book/(?'
                    .'|single/([^/]++)(*:536)'
                    .'|update/([^/]++)(*:559)'
                    .'|delete/([^/]++)(*:582)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        201 => [[['_route' => 'single_author', '_controller' => 'App\\Controller\\AuthorController::single'], ['author'], null, null, false, true, null]],
        224 => [[['_route' => 'update_author', '_controller' => 'App\\Controller\\AuthorController::update'], ['author'], null, null, false, true, null]],
        247 => [[['_route' => 'delete_author', '_controller' => 'App\\Controller\\AuthorController::delete'], ['author'], null, null, false, true, null]],
        279 => [[['_route' => 'get_author', '_controller' => 'App\\Controller\\Api\\AuthorController::getAuthorAction', '_format' => null], ['_format'], ['GET' => 0], null, false, true, null]],
        309 => [[['_route' => 'post_author', '_controller' => 'App\\Controller\\Api\\AuthorController::postAuthorAction', '_format' => null], ['_format'], ['POST' => 0], null, false, true, null]],
        380 => [[['_route' => 'sonata_admin_short_object_information', '_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'], ['_format'], null, null, false, true, null]],
        418 => [[['_route' => 'admin_app_author_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'App\\Admin\\AuthorAdmin', '_sonata_name' => 'admin_app_author_edit'], ['id'], null, null, false, false, null]],
        432 => [[['_route' => 'admin_app_author_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'App\\Admin\\AuthorAdmin', '_sonata_name' => 'admin_app_author_delete'], ['id'], null, null, false, false, null]],
        444 => [[['_route' => 'admin_app_author_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'App\\Admin\\AuthorAdmin', '_sonata_name' => 'admin_app_author_show'], ['id'], null, null, false, false, null]],
        474 => [[['_route' => 'admin_app_book_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'App\\Admin\\BookAdmin', '_sonata_name' => 'admin_app_book_edit'], ['id'], null, null, false, false, null]],
        488 => [[['_route' => 'admin_app_book_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'App\\Admin\\BookAdmin', '_sonata_name' => 'admin_app_book_delete'], ['id'], null, null, false, false, null]],
        500 => [[['_route' => 'admin_app_book_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'App\\Admin\\BookAdmin', '_sonata_name' => 'admin_app_book_show'], ['id'], null, null, false, false, null]],
        536 => [[['_route' => 'single_book', '_controller' => 'App\\Controller\\BookController::single'], ['book'], null, null, false, true, null]],
        559 => [[['_route' => 'update_book', '_controller' => 'App\\Controller\\BookController::update'], ['book'], null, null, false, true, null]],
        582 => [
            [['_route' => 'delete_book', '_controller' => 'App\\Controller\\BookController::delete'], ['book'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
