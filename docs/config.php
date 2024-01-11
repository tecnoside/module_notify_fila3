<?php

declare(strict_types=1);

use Illuminate\Support\Str;

$moduleName = 'Notify';

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Modulo '.$moduleName,
    'siteDescription' => 'Modulo '.$moduleName,
    'lang' => 'it',

    'collections' => [
        'posts' => [
<<<<<<< HEAD
            'path' => static function ($page) {
=======
            'path' => function ($page) {
>>>>>>> a7e2096 (first)
                // return $page->lang.'/posts/'.Str::slug($page->getFilename());
                // return 'posts/' . ($page->featured ? 'featured/' : '') . Str::slug($page->getFilename());

                return 'posts/'.Str::slug($page->getFilename());
            },
        ],
        'docs' => [
<<<<<<< HEAD
            'path' => static function ($page) {
=======
            'path' => function ($page) {
>>>>>>> a7e2096 (first)
                // return $page->lang.'/docs/'.Str::slug($page->getFilename());
                return 'docs/'.Str::slug($page->getFilename());
            },
        ],
    ],

    // Algolia DocSearch credentials
    'docsearchApiKey' => env('DOCSEARCH_KEY'),
    'docsearchIndexName' => env('DOCSEARCH_INDEX'),

    // navigation menu
<<<<<<< HEAD
<<<<<<< HEAD
    'navigation' => require_once ('navigation.php'),

    // helpers
    'isActive' => static function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isItemActive' => static function ($page, $item) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($item->getPath()));
    },
    'isActiveParent' => static function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(static function ($child) use ($page) {
                return trimPath($page->getPath()) === trimPath($child);
=======
    'navigation' => require_once('navigation.php'),
=======
    'navigation' => require_once ('navigation.php'),
>>>>>>> 3ae9a71 (Dusting)

    // helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isItemActive' => function ($page, $item) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($item->getPath()));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
>>>>>>> a7e2096 (first)
            });
        }
    }, /*
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },
    */
<<<<<<< HEAD
    'url' => static function ($page, $path) {
=======
    'url' => function ($page, $path) {
>>>>>>> a7e2096 (first)
        if (Str::startsWith($path, 'http')) {
            return $path;
        }

        // return url('/'.$page->lang.'/'.trimPath($path));
        return url('/'.trimPath($path));
    },

<<<<<<< HEAD
    'children' => static function ($page, $docs) {
=======
    'children' => function ($page, $docs) {
>>>>>>> a7e2096 (first)
        return $docs->where('parent_id', $page->id);
    },
];
