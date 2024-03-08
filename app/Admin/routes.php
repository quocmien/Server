<?php


use App\Admin\Controllers\OderController;
use App\Admin\Controllers\ProductsController;
use App\Admin\Controllers\UserController;
use App\Admin\Controllers\CartController;
use App\Admin\Controllers\CommentProduct;
use App\Admin\Controllers\BannersController;
use App\Admin\Controllers\CatetogoryController;
use App\Admin\Controllers\BrandController;
use App\Admin\Controllers\WishController;

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('products', ProductsController::class);
    $router->resource('users', UserController::class);
    $router->resource('oders', OderController::class);
    $router->resource('carts', CartController::class);
    $router->resource('comments', CommentProduct::class);
    $router->resource('catetogories', CatetogoryController::class);
    $router->resource('banners', BannersController::class);
    $router->resource('brands', BrandController::class);
    $router->resource('wishes', wishController::class);
    
});
