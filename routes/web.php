<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('page.index');
// });

Route::get('/', function () {
    return view('page');
});


/*Route::post('/admin', function () {
    return view('admin');
})->middleware('jwt.verify:user');*/




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource("productos", ProductsController::class);
Route::resource("blog", BlogController::class);

Route::get('/productos/{productos}/editProducto',[ProductsController::class, 'edit'])->name('editProducto');
Route::get('/shop/{productos}/ver-producto',[ProductsController::class, 'show'])->name('ver-producto');
Route::get('/shop',[ProductsController::class, 'mostrarProducto'])->name('shop');
Route::get('/blog/{blog}/editBlog',[BlogController::class, 'edit'])->name('editBlog');
Route::get('/blogger/{blog}/ver-blog',[BlogController::class, 'show'])->name('ver-blog');
Route::get('/blogger',[BlogController::class, 'mostrarBlog'])->name('blogger');

// Route::get('/{page}', function ($page) {
//     try{
//         return view($page);
//     }catch(Throwable $t){
//         abort(404,'Page not found');
//         abort(403);
//     }
// });
