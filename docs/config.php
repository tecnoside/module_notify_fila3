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
<<<<<<< HEAD
            'path' => static function ($page) {
=======
            'path' => function ($page) {
>>>>>>> a7e2096 (first)
=======
            'path' => static function ($page) {
>>>>>>> 05adcda (up)
                // return $page->lang.'/posts/'.Str::slug($page->getFilename());
                // return 'posts/' . ($page->featured ? 'featured/' : '') . Str::slug($page->getFilename());

                return 'posts/'.Str::slug($page->getFilename());
            },
        ],
        'docs' => [
<<<<<<< HEAD
<<<<<<< HEAD
            'path' => static function ($page) {
=======
            'path' => function ($page) {
>>>>>>> a7e2096 (first)
=======
            'path' => static function ($page) {
>>>>>>> 05adcda (up)
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
=======
    'navigation' => require_once ('navigation.php'),
>>>>>>> 05adcda (up)

    // helpers
    'isActive' => static function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isItemActive' => static function ($page, $item) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($item->getPath()));
    },
    'isActiveParent' => static function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
<<<<<<< HEAD
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
>>>>>>> a7e2096 (first)
=======
            return $menuItem->children->contains(static function ($child) use ($page) {
                return trimPath($page->getPath()) === trimPath($child);
>>>>>>> 05adcda (up)
            });
        }
    }, /*
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },
    */
<<<<<<< HEAD
<<<<<<< HEAD
    'url' => static function ($page, $path) {
=======
    'url' => function ($page, $path) {
>>>>>>> a7e2096 (first)
=======
    'url' => static function ($page, $path) {
>>>>>>> 05adcda (up)
        if (Str::startsWith($path, 'http')) {
            return $path;
        }

        // return url('/'.$page->lang.'/'.trimPath($path));
        return url('/'.trimPath($path));
    },

<<<<<<< HEAD
<<<<<<< HEAD
    'children' => static function ($page, $docs) {
=======
    'children' => function ($page, $docs) {
>>>>>>> a7e2096 (first)
=======
    'children' => static function ($page, $docs) {
>>>>>>> 05adcda (up)
        return $docs->where('parent_id', $page->id);
    },
];
