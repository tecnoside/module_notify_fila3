<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fe06862 (.)
=======
>>>>>>> b735fbf (.)
=======
>>>>>>> a758bd5 (.)
=======
>>>>>>> 7bcd34c (.)
declare(strict_types=1);

use Illuminate\Support\Str;

<<<<<<< HEAD
<<<<<<< HEAD
$moduleName = 'Notify';

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Modulo ' . $moduleName,
    'siteDescription' => 'Modulo ' . $moduleName,
<<<<<<< HEAD
<<<<<<< HEAD
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

=======
>>>>>>> fe06862 (.)
=======
use Illuminate\Support\Str;

$moduleName = 'Notify';

>>>>>>> dd3d1c2 (up)
return [
    'baseUrl' => '',
    'production' => false,
<<<<<<< HEAD
    'siteName' => 'Modulo Notify',
    'siteDescription' => 'Beautiful docs powered by Jigsaw',
<<<<<<< HEAD
>>>>>>> 404660b (up)
=======
>>>>>>> fe06862 (.)
=======
    'siteName' => 'Modulo '.$moduleName,
    'siteDescription' => 'Modulo '.$moduleName,
=======
>>>>>>> b735fbf (.)
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
>>>>>>> dd3d1c2 (up)
=======
=======
declare(strict_types=1);

>>>>>>> 8f4c37e (.)
use Illuminate\Support\Str;

=======
>>>>>>> a758bd5 (.)
=======
use Illuminate\Support\Str;

$moduleName = 'Notify';

>>>>>>> 55575a7 (up)
return [
    'baseUrl' => '',
    'production' => false,
<<<<<<< HEAD
    'siteName' => 'Modulo Notify',
    'siteDescription' => 'Beautiful docs powered by Jigsaw',
<<<<<<< HEAD
>>>>>>> becf1dc (up)
=======
>>>>>>> a758bd5 (.)
=======
    'siteName' => 'Modulo '.$moduleName,
    'siteDescription' => 'Modulo '.$moduleName,
=======
>>>>>>> 7bcd34c (.)
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
>>>>>>> 55575a7 (up)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'isItemActive' => function ($page, $item) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($item->getPath()));
    },
=======
>>>>>>> 404660b (up)
=======
>>>>>>> fe06862 (.)
=======
    'isItemActive' => function ($page, $item) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($item->getPath()));
    },
>>>>>>> fbeb824 (up)
=======
>>>>>>> becf1dc (up)
=======
>>>>>>> a758bd5 (.)
=======
    'isItemActive' => function ($page, $item) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($item->getPath()));
    },
>>>>>>> c9e699e (up)
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b735fbf (.)
=======
>>>>>>> 7bcd34c (.)
    }, /*
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },
    */
    'url' => function ($page, $path) {
        if (Str::startsWith($path, 'http')) {
            return $path;
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> b735fbf (.)
=======

>>>>>>> 68cf2d6 (Dusting)
=======
>>>>>>> 7bcd34c (.)
=======

>>>>>>> 7921874 (Dusting)
        // return url('/'.$page->lang.'/'.trimPath($path));
        return url('/' . trimPath($path));
    },

    'children' => function ($page, $docs) {
        return $docs->where('parent_id', $page->id);
    },
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> fe06862 (.)
    },
=======
    },/*
>>>>>>> dd3d1c2 (up)
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 404660b (up)
=======
>>>>>>> fe06862 (.)
];
=======
    */
    'url' => function ($page, $path) {
        if (Str::startsWith($path, 'http')) {
            return $path;
        }
         //return url('/'.$page->lang.'/'.trimPath($path));
        return url('/'.trimPath($path));
    },
<<<<<<< HEAD
<<<<<<< HEAD
];
>>>>>>> dd3d1c2 (up)
=======
=======
>>>>>>> 8126475 (up)

    'children' => function ($page, $docs) {
        return $docs->where('parent_id', $page->id);
    },
<<<<<<< HEAD
];
>>>>>>> 78056fb (up)
=======
];
>>>>>>> b735fbf (.)
=======
=======
>>>>>>> a758bd5 (.)
    },
=======
    },/*
>>>>>>> 55575a7 (up)
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },
<<<<<<< HEAD
];
<<<<<<< HEAD
>>>>>>> becf1dc (up)
=======
>>>>>>> a758bd5 (.)
=======
    */
    'url' => function ($page, $path) {
        if (Str::startsWith($path, 'http')) {
            return $path;
        }
         //return url('/'.$page->lang.'/'.trimPath($path));
        return url('/'.trimPath($path));
    },
];
>>>>>>> 55575a7 (up)
=======
];
>>>>>>> 8126475 (up)
=======
];
>>>>>>> 7bcd34c (.)
