<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Blog;
use App\Controllers\Post;
/**
 * @var RouteCollection $routes
 */

// $routes->setDefaultNamespace('App\Controllers');
// $routes->setDefaultController('Home');
// $routes->setDefaultMethod('index');
// $routes->setTranslateURIDashes(false);
// $routes->set404Override();
// $routes->setAutoRoute(true);

$routes->get('/', 'Home::index');
$routes->get('blog', [Blog::class, 'index']);
$routes->get('post', [Post::class, 'index']);
$routes->get('post/create', [Post::class, 'create']);
$routes->post('post/store', [Post::class, 'store']);
$routes->get('post/edit/(:num)', [[Post::class, 'edit'], '$1']);
$routes->post('post/update/(:num)', [[Post::class, 'update'], '$1']);
$routes->get('post/delete/(:num)', [[Post::class, 'delete'], '$1']);