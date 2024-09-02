<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\shopController;
use App\Http\Controllers\frontend\UserController;
use App\Http\Controllers\frontend\IndexController;

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

// user login


Route::get('/login',[UserController::class,'Index'])->name('login');
Route::post('/login',[UserController::class,'Login'])->name('user.login');

Route::post('/register/create',[UserController::class,'Register'])->name('register');   
Route::get('/user/profile', [UserController::class, 'UserProfile'])->name('user.profile');


// category controller

Route::get('/products', [IndexController::class, 'Slider'])->name('slider');
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/logout', [IndexController::class, 'Logout'])->name('logout');


Route::get('/shop', [shopController::class, 'Shop'])->name('shop');

Route::get('/product_details', [shopController::class, 'Details'])->name('product_details');






Route::get('/about', function () {
return view('frontend.about_us');
});

Route::get('/contact', function () {
return view('frontend.contact_us');
});

Route::get('/cart', function () {
return view('frontend.cart');
});

Route::get('/checkout', function () {
return view('frontend.checkout');
});


Route::get('/my-account', function () {
return view('frontend.myaccount');
}); 

Route::get('/testimonials', function () {
    return view('frontend.testimonials');
    }); 



    Route::get('/blog',[BlogController::class,'Blog'])->name('blog');
    Route::get('/blogdetails',[BlogController::class,'BlogDetails'])->name('blog.details');

   






