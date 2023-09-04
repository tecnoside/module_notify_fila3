<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

use Illuminate\Support\Str;

$moduleName = 'Notify';

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Modulo ' . $moduleName,
    'siteDescription' => 'Modulo ' . $moduleName,
    'lang' => 'it',

    'collections' => [
        'posts' => [
            'path' => function ($page) {
                // return $page->lang.'/posts/'.Str::slug($page->getFilename());
                // return 'posts/' . ($page->featured ? 'featured/' : '') . Str::slug($page->getFilename());

                return 'posts/' . Str::slug($page->getFilename());
            },
        ],
        'docs' => [
            'path' => function ($page) {
                // return $page->lang.'/docs/'.Str::slug($page->getFilename());
                return 'docs/' . Str::slug($page->getFilename());
            },
        ],
    ],
=======
=======
declare(strict_types=1);

>>>>>>> 996ab99 (.)
use Illuminate\Support\Str;

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Modulo Notify',
    'siteDescription' => 'Beautiful docs powered by Jigsaw',
>>>>>>> 404660b (up)

    // Algolia DocSearch credentials
    'docsearchApiKey' => env('DOCSEARCH_KEY'),
    'docsearchIndexName' => env('DOCSEARCH_INDEX'),

    // navigation menu
    'navigation' => require_once('navigation.php'),

    // helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
<<<<<<< HEAD
    'isItemActive' => function ($page, $item) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($item->getPath()));
    },
=======
>>>>>>> 404660b (up)
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
<<<<<<< HEAD
    }, /*
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },
    */
    'url' => function ($page, $path) {
        if (Str::startsWith($path, 'http')) {
            return $path;
        }

        // return url('/'.$page->lang.'/'.trimPath($path));
        return url('/' . trimPath($path));
    },

    'children' => function ($page, $docs) {
        return $docs->where('parent_id', $page->id);
    },
=======
    },
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/'.trimPath($path);
    },
>>>>>>> 404660b (up)
];
