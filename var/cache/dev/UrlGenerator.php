<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'api_app_api_author_getauthor' => [[], ['_controller' => 'App\\Controller\\Api\\AuthorController::getAuthorAction'], [], [['text', '/api/authors']], [], []],
    'api_app_api_author_postauthor' => [[], ['_controller' => 'App\\Controller\\Api\\AuthorController::postAuthorAction'], [], [['text', '/api/author']], [], []],
    'author' => [[], ['_controller' => 'App\\Controller\\AuthorController::index'], [], [['text', '/']], [], []],
    'single_author' => [['author'], ['_controller' => 'App\\Controller\\AuthorController::single'], [], [['variable', '/', '[^/]++', 'author', true], ['text', '/author/single']], [], []],
    'create_author' => [[], ['_controller' => 'App\\Controller\\AuthorController::create'], [], [['text', '/author/create']], [], []],
    'update_author' => [['author'], ['_controller' => 'App\\Controller\\AuthorController::update'], [], [['variable', '/', '[^/]++', 'author', true], ['text', '/author/update']], [], []],
    'delete_author' => [['author'], ['_controller' => 'App\\Controller\\AuthorController::delete'], [], [['variable', '/', '[^/]++', 'author', true], ['text', '/author/delete']], [], []],
    'book' => [[], ['_controller' => 'App\\Controller\\BookController::index'], [], [['text', '/book']], [], []],
    'single_book' => [['book'], ['_controller' => 'App\\Controller\\BookController::single'], [], [['variable', '/', '[^/]++', 'book', true], ['text', '/book/single']], [], []],
    'create_book' => [[], ['_controller' => 'App\\Controller\\BookController::create'], [], [['text', '/book/create']], [], []],
    'update_book' => [['book'], ['_controller' => 'App\\Controller\\BookController::update'], [], [['variable', '/', '[^/]++', 'book', true], ['text', '/book/update']], [], []],
    'delete_book' => [['book'], ['_controller' => 'App\\Controller\\BookController::delete'], [], [['variable', '/', '[^/]++', 'book', true], ['text', '/book/delete']], [], []],
    'sonata_admin_redirect' => [[], ['_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sonata_admin_dashboard', 'permanent' => 'true'], [], [['text', '/admin/']], [], []],
    'sonata_admin_dashboard' => [[], ['_controller' => 'Sonata\\AdminBundle\\Action\\DashboardAction'], [], [['text', '/admin/dashboard']], [], []],
    'sonata_admin_retrieve_form_element' => [[], ['_controller' => 'sonata.admin.action.retrieve_form_field_element'], [], [['text', '/admin/core/get-form-field-element']], [], []],
    'sonata_admin_append_form_element' => [[], ['_controller' => 'sonata.admin.action.append_form_field_element'], [], [['text', '/admin/core/append-form-field-element']], [], []],
    'sonata_admin_short_object_information' => [['_format'], ['_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'], ['_format' => 'html|json'], [['variable', '.', 'html|json', '_format', true], ['text', '/admin/core/get-short-object-description']], [], []],
    'sonata_admin_set_object_field_value' => [[], ['_controller' => 'sonata.admin.action.set_object_field_value'], [], [['text', '/admin/core/set-object-field-value']], [], []],
    'sonata_admin_search' => [[], ['_controller' => 'Sonata\\AdminBundle\\Action\\SearchAction'], [], [['text', '/admin/search']], [], []],
    'sonata_admin_retrieve_autocomplete_items' => [[], ['_controller' => 'sonata.admin.action.retrieve_autocomplete_items'], [], [['text', '/admin/core/get-autocomplete-items']], [], []],
    'admin_app_author_list' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'App\\Admin\\AuthorAdmin', '_sonata_name' => 'admin_app_author_list'], [], [['text', '/admin/app/author/list']], [], []],
    'admin_app_author_create' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'App\\Admin\\AuthorAdmin', '_sonata_name' => 'admin_app_author_create'], [], [['text', '/admin/app/author/create']], [], []],
    'admin_app_author_batch' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'App\\Admin\\AuthorAdmin', '_sonata_name' => 'admin_app_author_batch'], [], [['text', '/admin/app/author/batch']], [], []],
    'admin_app_author_edit' => [['id'], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'App\\Admin\\AuthorAdmin', '_sonata_name' => 'admin_app_author_edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/app/author']], [], []],
    'admin_app_author_delete' => [['id'], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'App\\Admin\\AuthorAdmin', '_sonata_name' => 'admin_app_author_delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/app/author']], [], []],
    'admin_app_author_show' => [['id'], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'App\\Admin\\AuthorAdmin', '_sonata_name' => 'admin_app_author_show'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/app/author']], [], []],
    'admin_app_author_export' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'App\\Admin\\AuthorAdmin', '_sonata_name' => 'admin_app_author_export'], [], [['text', '/admin/app/author/export']], [], []],
    'admin_app_book_list' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'App\\Admin\\BookAdmin', '_sonata_name' => 'admin_app_book_list'], [], [['text', '/admin/app/book/list']], [], []],
    'admin_app_book_create' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'App\\Admin\\BookAdmin', '_sonata_name' => 'admin_app_book_create'], [], [['text', '/admin/app/book/create']], [], []],
    'admin_app_book_batch' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'App\\Admin\\BookAdmin', '_sonata_name' => 'admin_app_book_batch'], [], [['text', '/admin/app/book/batch']], [], []],
    'admin_app_book_edit' => [['id'], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'App\\Admin\\BookAdmin', '_sonata_name' => 'admin_app_book_edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/app/book']], [], []],
    'admin_app_book_delete' => [['id'], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'App\\Admin\\BookAdmin', '_sonata_name' => 'admin_app_book_delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/app/book']], [], []],
    'admin_app_book_show' => [['id'], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'App\\Admin\\BookAdmin', '_sonata_name' => 'admin_app_book_show'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/app/book']], [], []],
    'admin_app_book_export' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'App\\Admin\\BookAdmin', '_sonata_name' => 'admin_app_book_export'], [], [['text', '/admin/app/book/export']], [], []],
    'get_author' => [['_format'], ['_controller' => 'App\\Controller\\Api\\AuthorController::getAuthorAction', '_format' => null], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format', true], ['text', '/authors']], [], []],
    'post_author' => [['_format'], ['_controller' => 'App\\Controller\\Api\\AuthorController::postAuthorAction', '_format' => null], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format', true], ['text', '/author']], [], []],
];
